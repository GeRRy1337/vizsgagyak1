<body class="bg-danger">
<div class="container">
    <h1>Futóverseny jelentkezési lap</h1>
    <div class="row bg-light border rounded border-2 border-primary">
        <div class="col-4 ">
            <h2>Adatok</h2>
            <form method="Post">
                <div>
                    <label for="nev">Név:</label><br>
                    <input required type="text" name="nev" id="nev">
                </div>
                <div>
                    <label for="email">Email:</label><br>
                    <input required type="email" name="email" id="email">
                </div>
                <div>
                    <label for="szul">Születési idő:</label><br>
                    <input required type="date" name="szul" id="szul">
                </div>
                <div>
                    <label for="nem">Nem:</label><br>
                    <input type="radio" name="nem" value="Férfi" id="nem">
                    <label for="nem">Férfi</label><br>
                    <input type="radio" name="nem" value="Nő" id="nem">
                    <label for="nem">Nő </label><br>
                </div>
                <input type="submit" name="jelentkezesGomb" value="Küldés" class="btn btn-primary">
            </form>
        </div>
        <div class="col-6">
            <h2>Fontos</h2>
            <p></p>
        </div>
        <div class="col-2">
            <div class="bg-danger rounded">
                <h2>Start:<br>17:00</h2>
            </div>
        </div>
    </div>
</div>