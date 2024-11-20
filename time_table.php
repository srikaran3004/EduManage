<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.logout {
    text-align: right;
    font-family: "Lucida Console", "Courier New", monospace;
}

table {
    border: 1px solid black;
    border-collapse: collapse;
    width: 100%;
    border-color: black;
}

td {
    text-align: center;
}
a {
    text-decoration: none;
    color: #464f41;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    font-family: "Lucida Console", "Courier New", monospace;
}

#customers tr:nth-child(even) {
    background-color: #f2f2f2;
}

#customers tr:hover {
    background-color: #ddd;
}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #464f41;
    color: white;
    font-family: "Lucida Console", "Courier New", monospace;
}

h2 {
    color: #464f41;
    font-family: "Lucida Console", "Courier New", monospace;
}
</style>

<script>
function updateCell(day, timeSlot) {
    const cellId = day + '-' + timeSlot;
    const currentContent = document.getElementById(cellId).innerText;
    const newValue = prompt("Enter new value:", currentContent);
    if (newValue !== null && newValue.trim() !== '') {
        document.getElementById(cellId).innerText = newValue;
    }
}
</script>

</head>

<body bgcolor="#bfcba8">
<div class="logout">
    <a href="student_dashboard.php">HOME |</a>
    <a href="logout.php"> LOGOUT</a>
</div>
<h2>Here's your timetable...</h2>

<table id="customers">
    <tr>
        <th>DAY</th>
        <th>9:00-9:50</th>
        <th>10:00-10:50</th>
        <th>11:00-11:50</th>
        <th>12:00-12:50</th>
        <th>1:00-1:50</th>
        <th>2:00-2:50</th>
        <th>3:00-3:50</th>
        <th>4:00-4:50</th>
        <th>5:00-5:50</th>
    </tr>
    <tr>
        <td>Monday</td>
        <td id="Monday-9AM" onclick="updateCell('Monday', '9AM')">Subject 1</td>
        <td id="Monday-10AM" onclick="updateCell('Monday', '10AM')">Subject 2</td>
        <td id="Monday-11AM" onclick="updateCell('Monday', '11AM')">Subject 3</td>
        <td id="Monday-12PM" onclick="updateCell('Monday', '12PM')">Subject 4</td>
        <td id="Monday-1PM" onclick="updateCell('Monday', '1PM')">Break</td>
        <td id="Monday-2PM" onclick="updateCell('Monday', '2PM')">Subject 5</td>
        <td id="Monday-3PM" onclick="updateCell('Monday', '3PM')">Subject 6</td>
        <td id="Monday-4PM" onclick="updateCell('Monday', '4PM')">Subject 7</td>
        <td id="Monday-5PM" onclick="updateCell('Monday', '5PM')">Subject 8</td>
    </tr>
    <tr>
        <td>Tuesday</td>
        <td id="Tuesday-9AM" onclick="updateCell('Tuesday', '9AM')">Subject 1</td>
        <td id="Tuesday-10AM" onclick="updateCell('Tuesday', '10AM')">Subject 2</td>
        <td id="Tuesday-11AM" onclick="updateCell('Tuesday', '11AM')">Subject 3</td>
        <td id="Tuesday-12PM" onclick="updateCell('Tuesday', '12PM')">Subject 4</td>
        <td id="Tuesday-1PM" onclick="updateCell('Tuesday', '1PM')">Break</td>
        <td id="Tuesday-2PM" onclick="updateCell('Tuesday', '2PM')">Subject 5</td>
        <td id="Tuesday-3PM" onclick="updateCell('Tuesday', '3PM')">Subject 6</td>
        <td id="Tuesday-4PM" onclick="updateCell('Tuesday', '4PM')">Subject 7</td>
        <td id="Tuesday-5PM" onclick="updateCell('Tuesday', '5PM')">Subject 8</td>
    </tr>
    <tr>
        <td>Wednesday</td>
        <td id="Wednesday-9AM" onclick="updateCell('Wednesday', '9AM')">Subject 1</td>
        <td id="Wednesday-10AM" onclick="updateCell('Wednesday', '10AM')">Subject 2</td>
        <td id="Wednesday-11AM" onclick="updateCell('Wednesday', '11AM')">Subject 3</td>
        <td id="Wednesday-12PM" onclick="updateCell('Wednesday', '12PM')">Subject 4</td>
        <td id="Wednesday-1PM" onclick="updateCell('Wednesday', '1PM')">Break</td>
        <td id="Wednesday-2PM" onclick="updateCell('Wednesday', '2PM')">Subject 5</td>
        <td id="Wednesday-3PM" onclick="updateCell('Wednesday', '3PM')">Subject 6</td>
        <td id="Wednesday-4PM" onclick="updateCell('Wednesday', '4PM')">Subject 7</td>
        <td id="Wednesday-5PM" onclick="updateCell('Wednesday', '5PM')">Subject 8</td>
    </tr>
    <tr>
        <td>Thursday</td>
        <td id="Thursday-9AM" onclick="updateCell('Thursday', '9AM')">Subject 1</td>
        <td id="Thursday-10AM" onclick="updateCell('Thursday', '10AM')">Subject 2</td>
        <td id="Thursday-11AM" onclick="updateCell('Thursday', '11AM')">Subject 3</td>
        <td id="Thursday-12PM" onclick="updateCell('Thursday', '12PM')">Subject 4</td>
        <td id="Thursday-1PM" onclick="updateCell('Thursday', '1PM')">Break</td>
        <td id="Thursday-2PM" onclick="updateCell('Thursday', '2PM')">Subject 5</td>
        <td id="Thursday-3PM" onclick="updateCell('Thursday', '3PM')">Subject 6</td>
        <td id="Thursday-4PM" onclick="updateCell('Thursday', '4PM')">Subject 7</td>
        <td id="Thursday-5PM" onclick="updateCell('Thursday', '5PM')">Subject 8</td>
    </tr>
    <tr>
        <td>Friday</td>
        <td id="Friday-9AM" onclick="updateCell('Friday', '9AM')">Subject 1</td>
        <td id="Friday-10AM" onclick="updateCell('Friday', '10AM')">Subject 2</td>
        <td id="Friday-11AM" onclick="updateCell('Friday', '11AM')">Subject 3</td>
        <td id="Friday-12PM" onclick="updateCell('Friday', '12PM')">Subject 4</td>
        <td id="Friday-1PM" onclick="updateCell('Friday', '1PM')">Break</td>
        <td id="Friday-2PM" onclick="updateCell('Friday', '2PM')">Subject 5</td>
        <td id="Friday-3PM" onclick="updateCell('Friday', '3PM')">Subject 6</td>
        <td id="Friday-4PM" onclick="updateCell('Friday', '4PM')">Subject 7</td>
        <td id="Friday-5PM" onclick="updateCell('Friday', '5PM')">Subject 8</td>
    </tr>
</table>
</body>
</html>
