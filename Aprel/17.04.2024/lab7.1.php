<!DOCTYPE html>
<html lang="en">

<head>
    
</head>

<body>
    <form >
        <h3>My feedback form</h3>
        <ul>
            <li style="text-wrap: nowrap;">
                <label for="name">Name:</label>
                <input type="text" id="name">
            </li>
            <li style="text-wrap: nowrap;">
                <label for="email">Email:</label>
                <input type="email" id="email">
            </li>
            <li style="text-wrap: nowrap;">
                <label for="password">Password:</label>
                <input type="password" id="password"><br><br>
            </li>
            <li style="text-wrap: nowrap;">
                <label for="checkbox">Please check all the emotions that apply to you:</label>
                <ul>
                    <li style="text-wrap: nowrap;">
                        <label for="angry">Angry:</label>
                        <input type="checkbox" id="angry" >
                    </li>
                    <li style="text-wrap: nowrap;">
                        <label for="sad">Sad:</label>
                        <input type="checkbox" id="sad" >
                    </li>
                    <li style="text-wrap: nowrap;">
                        <label for="happy">Happy:</label>
                        <input type="checkbox" id="happy">
                    </li>
                    <li style="text-wrap: nowrap;">
                        <label for="ambivalent">Ambivalent:</label>
                        <input type="checkbox" id="ambivalent">
                    </li>
                </ul>
            </li>
            <li style="text-wrap: nowrap;">
                <label for="checkbox">How satisfied were you with our service?</label>
                <ul>
                    <li style="text-wrap: nowrap;">
                        <label for="vs">Very satisfied</label>
                        <input type="radio" id="vs" >
                    </li>
                    <li style="text-wrap: nowrap;">
                        <label for="s">Satisfied</label>
                        <input type="radio" id="s" >
                    </li>
                    <li style="text-wrap: nowrap;">
                        <label for="dc">Didn't care</label>
                        <input type="radio" id="dc">
                    </li>
                    <li style="text-wrap: nowrap;">
                        <label for="D">Dissatisfied</label>
                        <input type="radio" id="D">
                    </li>
                    <li style="text-wrap: nowrap;">
                        <label for="vd">Very satisfied</label>
                        <input type="radio" id="vd">
                    </li>
                </ul>
            </li>
            <li>
                <label for="further">Further comments:</label>
                <textarea> </textarea>
            </li>
            <li>
                <label for="bp">Bio photo:</label>
                <input type="text" id="bp">
                <button style="border-radius: 10px;">Choose</button>
            </li>
            <li>
                <label for="lv">Location visited:</label>
                <input type="text" id="lv">
                <button style="border-radius: 10px;">Select location</button>
            </li>
            <li>
                <input style="border-radius: 10px;" type="submit" value="Qeydiyyat">
            </li>
        </ul>
    </form>
</body>

</html>