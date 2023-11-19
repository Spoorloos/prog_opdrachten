const schooldays = [
    "monday",
    "tuesday",
    "wednesday",
    "thursday",
    "friday"
];

function is_school_day(day) {
    return schooldays.includes(day.toLowerCase());
}

console.log(is_school_day("monday") ? "Ik moet naar school" : "Lekker uitslapen!");