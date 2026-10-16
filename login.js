// Toggle tampilan password
function togglePassword() {
  const passwordInput = document.getElementById("password");
  const showPassIcon = document.querySelector(".show-pass");
  if (!passwordInput) return;

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    if (showPassIcon) showPassIcon.textContent = "🙈";
  } else {
    passwordInput.type = "password";
    if (showPassIcon) showPassIcon.textContent = "👁️";
  }
}

// Inisialisasi ikon saat halaman selesai dimuat
document.addEventListener("DOMContentLoaded", function () {
  const showPassIcon = document.querySelector(".show-pass");
  if (showPassIcon && !showPassIcon.textContent) {
    showPassIcon.textContent = "👁️";
  }
});

