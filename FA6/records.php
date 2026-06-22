<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Registration System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">
        <h1>Dog Registration</h1>
        <p class="subtitle">Enter Dog Information</p>

        <form action="DogSave.php" method="POST">

            <div class="form-grid">

                <div class="input-group">
                    <label>Dog Name</label>
                    <input type="text" name="name" required>
                </div>

                <div class="input-group">
                    <label>Breed</label>
                    <input type="text" name="breed" required>
                </div>

                <div class="input-group">
                    <label>Age</label>
                    <input type="number" name="age" required>
                </div>

                <div class="input-group">
                    <label>Color</label>
                    <input type="text" name="color" required>
                </div>

                <div class="input-group">
                    <label>Height (cm)</label>
                    <input type="number" step="0.01" name="height" required>
                </div>

                <div class="input-group">
                    <label>Weight (kg)</label>
                    <input type="number" step="0.01" name="weight" required>
                </div>

            </div>

            <div class="input-group">
                <label>Address</label>
                <input type="text" name="address" required>
            </div>

            <button type="submit" class="btn-save">
                Save Information
            </button>

        </form>
    </div>
</div>

</body>
</html>
