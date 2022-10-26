//define some sample data
let tabledata = [
    { id: 1, name: "Cow 1", gender: "Cow", last: "Today 7:00AM", temp: "24" },
    { id: 2, name: "Cow 2", gender: "Bull", last: "Today 7:00AM", temp: "23" },
    { id: 3, name: "Cow 3", gender: "Bull", last: "Today 7:00AM", temp: "24" },
    { id: 4, name: "Cow 4", gender: "Cow", last: "Today 7:00AM", temp: "26" },
    { id: 5, name: "Cow 5", gender: "Cow", last: "Today 7:00AM", temp: "25" },
    { id: 6, name: "Cow 6", gender: "Bull", last: "Today 7:00AM", temp: "24" },
    { id: 7, name: "Cow 7", gender: "Cow", last: "Today 7:00AM", temp: "26" },
];

let table = new Tabulator("#table", {
    height: "auto",
    history: true,
    data: tabledata,
    responsiveLayout: "hide",
    paginationCounter: "rows",
    columns: [
        { title: "Name", field: "name", width: 200 },
        { title: "Gender", field: "gender", width: 150 },
        { title: "Last check", field: "last", width: 170 },
        { title: "Temperature", field: "temp", width: 150 },
    ],
});