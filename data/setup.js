const DATA_COUNT = 7;
const NUMBER_CFG = { count: DATA_COUNT, min: 0, max: 10 };

const labels = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
];


const data = {
    labels: labels,
    datasets: [{
        label: 'Cow 1',
        data: numbers(NUMBER_CFG),
        borderColor: CHART_COLORS.red,
        backgroundColor: CHART_COLORS.red,
        fill: true
    },
    {
        label: 'Cow 2',
        data: numbers(NUMBER_CFG),
        borderColor: CHART_COLORS.blue,
        backgroundColor: CHART_COLORS.blue,
        fill: true
    },
    {
        label: 'Cow 3',
        data: numbers(NUMBER_CFG),
        borderColor: CHART_COLORS.green,
        backgroundColor: CHART_COLORS.green,
        fill: true
    },
    {
        label: 'Cow 4',
        data: numbers(NUMBER_CFG),
        borderColor: CHART_COLORS.yellow,
        backgroundColor: CHART_COLORS.yellow,
        fill: true
    },
    {
        label: 'Cow 5',
        data: numbers(NUMBER_CFG),
        borderColor: CHART_COLORS.purple,
        backgroundColor: CHART_COLORS.purple,
        fill: true
    },
    {
        label: 'Cow 6',
        data: numbers(NUMBER_CFG),
        borderColor: CHART_COLORS.orange,
        backgroundColor: CHART_COLORS.orange,
        fill: true
    },
    {
        label: 'Cow 7',
        data: numbers(NUMBER_CFG),
        borderColor: CHART_COLORS.grey,
        backgroundColor: CHART_COLORS.grey,
        fill: true
    }
    ]
};