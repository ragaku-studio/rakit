function rkShowToast(id) {
  const el = document.getElementById(id);
  el.classList.add('rk-toast--visible');
  setTimeout(() => el.classList.remove('rk-toast--visible'), 3000);
}