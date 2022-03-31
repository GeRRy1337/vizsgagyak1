<body class="bg-danger">
<div class="container cont">
    <h1>Futóverseny jelentkezési lap</h1>
    <div class="regisztracio row bg-light border rounded border-2 border-primary">
        <div class="col-4">
            <h2>Adatok</h2>
            <form method="Post">
                <div>
                    <label for="nev"><b>Név:</b></label><br>
                    <input required type="text" name="nev" id="nev">
                </div>
                <div>
                    <label for="email"><b>Email:</b></label><br>
                    <input required type="email" name="email" id="email">
                </div>
                <div>
                    <label for="szul"><b>Születési idő:</b></label><br>
                    <input required type="date" name="szul" id="szul">
                </div>
                <div>
                    <label for="nem"><b>Nem:</b></label><br>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut ligula et enim dictum blandit. Maecenas convallis ultrices est, id ultricies turpis rutrum aliquet. Nunc laoreet aliquam justo, sed pulvinar neque vestibulum ut. Vestibulum ut convallis quam. Suspendisse pharetra fringilla quam, at fermentum mauris rhoncus ut. Quisque pellentesque nunc quis ante ultricies dignissim nec vel dolor. Sed vehicula orci odio, non facilisis nunc iaculis et. Integer ut erat ante. Nunc placerat, ex id viverra congue, felis orci cursus augue, vel sollicitudin ipsum ipsum quis erat. Vestibulum eu est quam. Integer scelerisque dui dignissim, congue justo in, accumsan eros. Aenean maximus sit amet magna at dignissim. In eu lacus auctor, cursus massa at, fringilla urna. Praesent blandit gravida libero, at efficitur turpis tempor at.</p>
        </div>
        <div class="col-2">
            <div class="bg-danger rounded">
                <h2>Start:<br>17:00</h2>
            </div>
        </div>
    </div>
</div>