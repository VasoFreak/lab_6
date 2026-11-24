<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            font-family: Arial, sans-serif;
        }
        td {
            border: 1px solid #333;
            padding: 8px 12px;
        }
        td:first-child {
            font-weight: bold;
            width: 30%;
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <?php
        $name = "Muhammad Faiz Izwan bin Zolkifli";
        $matricNumber = "AI230000"; // Replace with your matric number
        $course = "Bachelor of Computer Science (Software Engineering) with Honours";
        $yearOfStudy = "Year 3"; // Replace with your current year of study
        $address = "Parit Raja, Batu Pahat, Johor"; // Replace with your address
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>