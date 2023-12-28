<?php
// FTP server settings
$ftpServer = "127.0.0.1";
$ftpUsername = 'matarat';
$ftpPassword = 'matarat123';

$imageData = $_POST['image'];
// Remove the data URL header
$imageData = str_replace('data:image/jpeg;base64,', '', $imageData);

// Decode the base64 image data
$imageData = base64_decode($imageData);

$filename = $_POST['fileName'] . '.jpeg';

file_put_contents($filename, $imageData);

// Connect to the FTP server
$conn = ftp_connect($ftpServer, 21);
if (!$conn) {
    die("Could not connect to $ftpServer.\n");
}
if (ftp_login($conn, $ftpUsername, $ftpPassword)) {
    echo "Connected to Server.\n";
} else {
    die("Could not connect to $ftpServer.\n");
}
ftp_pasv($conn, true);
// Upload the image file to the FTP server

if (ftp_put($conn, $filename, $filename, FTP_BINARY)) {
    echo "Successfully uploaded Image.";
    ftp_close($conn);
    unlink($filename);
} else {
    echo "There was an error uploading $filename to $filename.\n";
}
