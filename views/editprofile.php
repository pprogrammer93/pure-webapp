<!DOCTYPE html>
<html>

<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="statics/css/home.css">
</head>

<body>
    <?php embed("main-bar"); setvar('page', 'editprofile'); ?>

    <div id="main">
        <h2>Edit Profile<h2>
    </div>

    <form method="POST" id="input-form" autocomplete="off">
        <table>
            <col width="200">
            <col width="400">
            <tr>
                <td>
                    <div id="profile-picture">
                        <img src="/mocks/edit_profile.png" alt="foto profil">
                    </div>
                </td>
                <td>
                    <div class="input-fields" id="update-profile-picture">
                        <label>Update profile picture</label>
                    </div>
                    <br>
                    <input class="input-value inputbox inputfile" name='fileinput' id="fileinput" type="text" name="fname">
                    <div class="input-value inputfile" id="inputfileprofpic">
                        <input name="profilepic" type="file" id="user-profile-picture" size="50">
                    </div>
                    <button onclick=inputfile() type="button" class="filebutton" id="buttonprofpic">Browse ...</button>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="input-fields">
                        <label for="name">Name</label>
                    </div>
                </td>
                <td>
                    <div class="input-value" id="name-input">
                        <div>
                            <input name="name" id="user-name" type="text" value="<?php getvar('name'); ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <td>
                <div class="input-fields">
                    <label for="address">Address</label>
                </div>
            </td>
            <td>
                <div class="input-value">
                    <input name="address" id="user-address" type="text" value="<?php getvar('address'); ?>">
                    <br>
                    <br>
                    <br>
                </div>
            </td>
            <tr>
                <td>
                    <div class="input-fields">
                        <label for="phone-number">Phone Number</label>
                    </div>
                </td>
                <td>
                    <div class="input-value">
                        <input name="phone-number" id="user-phone-number" type="text" value="<?php getvar('phone'); ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <button onclick=changePage() type="button" id="back-button">Back</button>
                </td>
                <td>
                    <button class="right-button blue-button" type="submit" name="submit" id="save-button">Save</button>
                </td>
        </table>



    </form>

</body>
<script type="text/javascript">
    var picture_url = document.getElementById("user-profile-picture");
    picture_url.onchange = function (event) {
        fileinput.value = (picture_url.value);
    }

    function inputfile() {
        var user_profile_picture = document.getElementById("user-profile-picture");
        user_profile_picture.click();
    }

    function changePage() {
        console.log("HTE")
        window.location.href = "profile.php";
    }
</script>

</html>