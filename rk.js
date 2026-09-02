function rkShowToast(id) {
  const el = document.getElementById(id);
  el.classList.add('rk-toast--visible');
  setTimeout(() => el.classList.remove('rk-toast--visible'), 3000);
}

function rkSwitchTab(tabEl, panelId) {
  const tabsList = tabEl.closest('.rk-tabs-list');
  const tabsWrap = tabEl.closest('.rk-tabs');
  tabsList.querySelectorAll('.rk-tab').forEach(t => {
    t.classList.remove('rk-tab--active');
    t.setAttribute('aria-selected', 'false');
  });
  tabEl.classList.add('rk-tab--active');
  tabEl.setAttribute('aria-selected', 'true');
  tabsWrap.querySelectorAll('.rk-tab-panel').forEach(p => p.hidden = true);
  document.getElementById(panelId).hidden = false;
}