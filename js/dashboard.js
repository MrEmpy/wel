function OpenRedirect() {
    window.location.href = "openredirect";
}

function XSS() {
    window.location.href = "xss";
}

function CSRF() {
    window.location.href = "csrf.php";
}

function LFI() {
    window.location.href = "lfi.php?file=teste.txt";
}

function IDOR() {
    window.location.href = "idor.php";
}

function SQLI() {
    window.location.href = "../index.php";
}

function SSRF() {
    window.location.href = "ssrf.php";
}

function InfoDisclosure() {
    window.location.href = "infodisclosure.html";
}

function RCE() {
    window.location.href = "rce.php";
}

function FileUpload() {
    window.location.href = "fileupload.php";
}