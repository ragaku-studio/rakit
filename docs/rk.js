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

function rkColorSwatch() {
  const palettes = {
    nisesa: ["#eef4fb", "#dce9f6", "#b9d3ed", "#8fb6e0", "#5f94cf", "#3a73ba", "#245c9e", "#1a4e8a", "#13487f", "#0d3157", "#081f38"],
    mening: ["#ffffff", "#fafbfe", "#f4f6fb", "#e9edf5", "#d8dfec", "#c2cce0", "#aab6cb", "#8f9db3", "#6f7d91", "#4f5968", "#2f353f"],
    subawa: ["#fff8e6", "#fdefc2", "#fbe08a", "#f8cf4f", "#f5c22e", "#f3b41b", "#d99e16", "#b88512", "#93690e", "#6e4e0a", "#453006"]
  }

  const weightLabels = ["50", "100", "200", "300", "400", "500", "600", "700", "800", "900", "950"];

  Object.keys(palettes).forEach(colorName => {

    const container = document.getElementById(`rk-scale-${colorName}`);

    if (!container) return;

    let htmlContent = '';

    palettes[colorName].forEach((hex, index) => {

      const weight = weightLabels[index];

      htmlContent += `
        <div class="rk-card">
          <div class="rk-card-image">
            <div class="rk-scale-swatch" style="background: var(--rk-${colorName}-${weight})"></div>
          </div>
          <div class="rk-card-content">
            <h6>${hex.toUpperCase()}</h6>
            <span class="rk-badge-label">${colorName}-${weight}</span>
          </div>
        </div>
      `;
    });

    container.innerHTML = htmlContent;

  });
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", rkColorSwatch);
} else {
  rkColorSwatch();
}