function openReasonModal() {
    document.getElementById('myModal').style.display = "block";
}

function closeReasonModal() {
    document.getElementById('myModal').style.display = "none";
}

function saveReason() {
    var reason = document.getElementById('reason').value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "save_reason.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            alert("Inzidentzia jasota: " + reason);
            closeReasonModal(); // Modala itxi arrazoia gorde ondoren
        }
    };
    xhr.send("reason=" + reason);
}