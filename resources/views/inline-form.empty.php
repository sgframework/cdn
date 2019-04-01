<form class="form-inline" action="/action_page.php">
        <label for="email">Email:</label>
        <input class="form-control" type="text" class="input" name="staffname" value="{{ Auth::user()->name }}" />
        <input class="form-control" type="text" class="input" name="staffname" value="{{ Auth::user()->name }}" />

            <input type="email" id="email" placeholder="Enter email" name="email">
        <label for="pwd">Password:</label>
            <input type="password" id="pwd" placeholder="Enter password" name="pswd">
        <label>
            <input type="checkbox" name="urgent"> <span class="color:red"> Urgent</span></label>
    <button type="submit">Submit</button>
</form>