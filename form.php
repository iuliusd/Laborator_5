<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylefrm2.css" />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
            integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
            crossorigin="anonymous"/>
    <title>Registration Form</title>
</head>
<body>

<div class="txt">Registration Form</div>
<div class="container">

    <form id="form" class="form" action="entrydata.php" method="post">
        <div>
            <label for="name">First / Last Name</label>
            <i class="fa fa-user"></i>
            <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Your Name"/>
            <div class="error-text"></div>
        </div>

        <div>
            <label for="email">Email</label>
            <i class="fa fa-envelope"></i>
            <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="example@gmail.com"/>
            <div class="error-text"></div>
        </div>

        <div>
            <label for="phone">Phone</label>
            <i class="fa fa-phone"></i>
            <input
                    type="tel"
                    name="phone"
                    id="phone"
                    placeholder="Phone number here (+373) ..."
                    pattern="+[0-9]{3}-[0-9]{2}-[0-9]{3}"/>
            <div class="error-text" id="phoneError"></div>
        </div>

        <div>
            <label for="address">Physcal Address</label>
            <i class="fa fa-home"></i>
            <input
                    type="text"
                    name="address"
                    id="address"
                    placeholder="Address here"/>
        </div>

        <div>
            <label for="profession">Profession</label>
            <i class="fa fa-briefcase"></i>
            <input
                    type="text"
                    name="profession"
                    id="profession"
                    placeholder="Type your profesion name here"/>
        </div>

        <div class="education">
            <div>
                <label class="add">Education</label>
                <div class="edinfo"></div>
                <div id="edinfo" class="edinfo"></div>

                <div class="container2" id="container2">
                    <div class="ed1">
                        <label for="institution">Institution</label>
                        <i class="fa fa-university"></i>
                        <input
                                type="text"
                                name="institution"
                                id="institution"
                                class="info"
                                placeholder="Institution name"/>
                        <div class="error-text" id="institutionError"></div>

                        <label for="date">Graduation date</label>
                        <input
                                type="date"
                                name="date"
                                id="date"
                                class="info"/>
                        <div class="error-text" id="graduationError"></div>
                        <div class="edtype">
                            <label for="edtype">Education type</label>
                            <i class="fa fa-graduation-cap"></i>
                            <input
                                    type="text"
                                    name="education"
                                    id="education"
                                    class="info"
                                    placeholder="Type your education type here"/>
                            <div class="error-text" id="educationError"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="job" id="job">
            <div>
                <label>Jobs</label>
                <div class="container3" id="container3">
                    <div class="job1" >
                        <label for="jobname">Job name</label>
                        <i class="fa fa-black-tie"></i>
                        <input
                                type="text"
                                name="jobname"
                                id="jobname"
                                class="info"
                                placeholder="Type your job name here"/>
                        <div class="error-text" id="jobError"></div>
                        <label for="startdate">Start date</label>
                        <input
                                type="date"
                                name="startdate"
                                id="startdate"
                                class="info"/>
                        <div class="error-text" id="startdateError"></div>

                        <label for="enddate">End date</label>
                        <input
                                type="date"
                                name="enddate"
                                id="enddate"
                                class="info"/>
                        <div class="error-text" id="enddateError"></div>
                        <div class="present">
                            In present
                            <input
                                    type="checkbox"
                                    name="chbox"
                                    id="chbox"
                                    class="chbox">
                        </div>

                        <div class="cityname">
                            <label for="cityname">City / District</label>
                            <i class="fa fa-map"></i>
                            <input
                                    type="text"
                                    name="city1"
                                    id="city1"
                                    class="info"
                            placeholder="Enter city name">
                            <div class="error-text" id="cityError"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <button  type="submit" id="submit" class="button-name" name="save">Save my profile</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</body>

</html>