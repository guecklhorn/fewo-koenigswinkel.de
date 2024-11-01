;(async function (config) {
    const setDataInHTML = (cssClass, data) => {
        const tags = document.getElementsByClassName(cssClass)
        for (const tag of tags) tag.innerHTML = data
    }
    const getData = (name, obj) =>
        name.split('.').reduce((acc, cur) => acc && acc[cur], obj)
    const display = (metarData) => {
        config.data.forEach(
            ({
                key,
                transform,
                func,
                class: cssClass,
                append,
                default: defaultValue,
            }) => {
                if (key) {
                    const rawValue = getData(key, metarData)
                    const value =
                        rawValue !== false && rawValue !== undefined
                            ? transform?.(rawValue) ?? rawValue
                            : defaultValue || ''
                    if (cssClass)
                        setDataInHTML(
                            cssClass,
                            append ? `${value}${append}` : value
                        )
                    if (func) func(value)
                }
            }
        )
    }
    const getDataFromMetar = async () => {
        try {
            const response = await fetch(
                `https://api.checkwx.com/metar/${config.airport}/decoded`,
                { method: 'GET', headers: { 'X-API-Key': config.key } }
            )
            const { data: metarData } = await response.json()

            if (metarData) {
                const data = { date: new Date(), data: metarData[0] }
                setMetar(data)
                display(data.data)
            } else {
                display(getMetar()?.data || {})
            }
        } catch {
            display(getMetar()?.data || {})
        }
    }
    const storageName = `${config.storageName}-${config.airport.toLowerCase()}`
    const getMetar = () => JSON.parse(window.localStorage.getItem(storageName))
    const setMetar = (data) =>
        window.localStorage.setItem(storageName, JSON.stringify(data))
    const receiveData = () => {
        const metarData = getMetar()
        const minutesLeft = (new Date() - new Date(metarData?.date)) / 60000

        if (metarData?.data && minutesLeft <= config.cacheTTL) {
            display(metarData.data)
        } else {
            getDataFromMetar()
        }
    }
    receiveData()
})({
    key: '7e8cd8ce8020420bb01507e9dd', // API Key
    airport: 'EDJA', // EDMA Augsburg, EDJA Memmingen
    storageName: 'metar',
    cacheTTL: 30, // in minutes
    data: [
        /*
            {
                key: String <required>,
                class: String <optional>,
                append: String <optional>,
                default: String|Number <optional>,
                transform: Function <optional>,
                fun: Function <optional>
            }

            key: Pfad im Objekt von Metar (siehe "Metar Fields" auf https://www.checkwxapi.com/documentation/metar)
            class: CSS Klasse in welches Tag der Wert aus Key gesetzt werden soll
            append: Der Wert aus key wird am Ende erweitert durch append
            default: Wenn kein Wert gefunden wird, wird stattdessen default gesetzt. Ist kein Default und kein Wert wird das Tag aus class leer gemacht
            transform: Callback Funktion um den Wert bevor er in class gesetzt wird zu modifizieren. transform wird nur ausgeführt, wenn ein Wert aus key zurück gegeben wurde
            func: Callback Funktion um den Wert anderweitig zu verarbeiten. func wird nur ausgeführt, wenn ein Wert aus key zurück gegeben wurde
        */
        {
            key: 'station.name',
            class: 'js-metar-station-name',
            default: 'N/A',
            transform: (value) => {
                return ' – ' + value
            },
        },
        {
            key: 'observed',
            class: 'js-metar-observed',
            transform: (value) => {
                let date = new Date(value)
                return `${String(date.getDate()).padStart(2, '0')}.${String(
                    date.getMonth() + 1
                ).padStart(2, '0')}.${date.getFullYear()}`
            },
            default: 'N/A',
        },
        {
            key: 'temperature.celsius',
            class: 'js-metar-temperature',
            append: ' °C',
            default: 'N/A',
        },
        {
            key: 'clouds',
            func: (value) => {
                if (!Array.isArray(value)) {
                    return
                }

                const tag = document.getElementById('js-metar-clouds-layers')
                const icon = document.createElement('i')
                const content = document.createElement('p')
                const insertAfter = function insertAfter(
                    referenceNode,
                    newNode
                ) {
                    referenceNode.parentNode.insertBefore(
                        newNode,
                        referenceNode.nextSibling
                    )
                }
                const insertInHTML = function (targetClass, targetContent) {
                    icon.classList.add(targetClass)
                    content.innerText = targetContent
                    tag.appendChild(icon)
                    tag.appendChild(content)
                    insertAfter(tag, content)
                }
                const priority = { OVC: 4, BKN: 3, SCT: 2, FEW: 1 }

                // Zum testen:
                // value = [{ code: 'BKN' }, { code: 'FEW' }, { code: 'FEW' }]

                const highest = value.reduce((prev, current) => {
                    return priority[prev.code] > priority[current.code]
                        ? prev
                        : current
                })

                icon.classList.add('fa-kit')
                content.classList.add(
                    'text-center',
                    'leading-tight',
                    'text-sm',
                    'font-bold'
                )

                switch (highest.code) {
                    case 'OVC':
                        insertInHTML('fa-cloud-fog-light', 'Bewölkt')
                        break
                    case 'BKN':
                        insertInHTML('fa-clouds-light', 'Leichte Bewölkung')
                        break
                    case 'SCT':
                        insertInHTML('fa-clouds-sun-light', 'Vereinzelt')
                        break
                    default:
                        insertInHTML('fa-sun-light', 'Sonnig')
                        break
                }
            },
            default: 'N/A',
        },
        {
            key: 'wind.degrees',
            class: 'js-metar-wind-degrees',
            append: '°',
            func: (value) => {
                let tags = document.getElementsByClassName(
                    'js-metar-wind-needle'
                )
                for (let i = 0; i < tags.length; i++) {
                    tags[i].style.transform = 'rotate(' + value + 'deg)'
                }
            },
            default: 'N/A',
        },
        {
            key: 'wind.speed_kph',
            class: 'js-metar-wind-speed',
            append: '&nbsp;km/h',
            default: 'N/A',
        },
        {
            key: 'visibility.meters',
            class: 'js-metar-visibility-meters',
            default: 'N/A',
        },
        {
            key: 'barometer.hpa',
            class: 'js-metar-barometer',
            append: '&nbsp;hPa',
            default: 'N/A',
        },
        {
            key: 'raw_text',
            class: 'js-metar-raw',
            default: 'N/A',
        },
    ],
})
