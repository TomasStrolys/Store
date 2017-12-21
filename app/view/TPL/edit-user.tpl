
<div style="text-align: center">
<form method="POST" action="?view=user&action=update&id=[@id]" enctype="multipart/form-data">


    <div> Vardas:</div>
    <input type="text" name="name" value="[@name]"> <br>


    <div> Pavardė:</div>
    <input type="text" name="surname" value="[@surname]"> <br>



    <div> Gimimo dieno:</div>
    <input type="date" name="birth_date" value="[@birth_date]"> <br>

    <select name="gender">
        <option [@gender_male] value="male">Vyras</option>
        <option [@gender_female] value="female">Moteris</option>
    </select>

    <div> Pareigos:</div>
    <input type="text" name="position" value="[@position]"> <br>

    <div> Papildoma informacija:</div>
    <input type="text" name="more" value="[@more]"> <br>

    <div> Nuotrauka:</div>
    <input type="text" disabled name="picture" value="[@picture]"> <br>

    <br>

    <input type="submit" class="btn btn-primary" value="Registruoti duomenis"> <br>


</form>

</div>
<div style="text-align: center">

    <form method="POST" action="?view=user&action=delete&id=[@id]" enctype="multipart/form-data">

    <br>
    <input type="submit" class="btn btn-danger" value="Ištrint duomenis"> <br>

    </form>

</div>
