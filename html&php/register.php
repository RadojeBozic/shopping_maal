<?php
// Konfiguracija konekcije sa bazom podataka
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping_maal_register";

// Konektovanje sa bazom
$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
    die("Greška prilikom konekcije: " . $conn->connect_error);
}

// Prikupljanje podataka iz forme
$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars(trim($_POST['password']));

// Validacija email-a
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Neispravan format email-a.");
}

// Validacija lozinke (minimalno 8 karaktera)
if (strlen($password) < 8) {
    die("Lozinka mora sadržati najmanje 8 karaktera.");
}

// Hashiranje lozinke radi sigurnosti
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Provera da li email već postoji
$stmt_check = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$result = $stmt_check->get_result();
if ($result->num_rows > 0) {
    die("Email već postoji. Molimo vas koristite drugi.");
}

// Unos podataka u bazu
$stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $hashed_password);

if ($stmt->execute()) {
    echo "Uspešno ste registrovani!";
} else {
    echo "Došlo je do greške: " . $stmt->error;
}

// Zatvaranje konekcije
$stmt->close();
$conn->close();
?>
