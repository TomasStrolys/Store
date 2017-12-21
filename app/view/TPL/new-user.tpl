<div style="text-align: center">
    <form method="POST" action="?view=user&action=create" enctype="multipart/form-data">


        <div> Vardas:</div>
        <input type="text" name="name"> <br>

        <div> Pavardė:</div>
        <input type="text" name="surname"> <br>

        <div> Gimimo dieno:</div>
        <input type="date" name="birth_date"> <br>

        <div> Lytis:</div>
        <select name="gender">
            <option value="male">Vyras</option>
            <option value="female">Moteris</option>
        </select>


        <div> Pareigos:</div>
        <input type="text" name="position"> <br>

        <div> Papildoma informacija:</div>
        <input type="text" name="more"> <br>

        <div> Nuotrauka:</div>
        <input type="file" multiple accept="image/jpeg, image/png" name="picture"> <br>

        <br>

        <input type="submit" class="btn btn-primary" value="Registruoti duomenis"> <br>


    </form>

</div>
