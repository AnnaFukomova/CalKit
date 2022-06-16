var qestionContainers;
function initDrawers() {
	// Получение содержащих элементов
	qestionContainers = document.querySelectorAll(".qestionContainer");
	setHeights();
	wireUpTriggers();
	window.addEventListener("resize", setHeights);
}

window.addEventListener("load", initDrawers);

function setHeights() {
	qestionContainers.forEach(qestionContainer => {
		// Получить содержимое
		let content = qestionContainer.querySelector(".content");
		// Необходимо, если это действие выполняется после изменения размера
		content.removeAttribute("aria-hidden");
		// Высота контента для показа/скрытия
		let heightOfContent = content.querySelector(".qestion-punct__description").scrollHeight;
		// Установите пользовательское свойство CSS с высотой содержимого
		qestionContainer.style.setProperty("--qestionContainerHeight", `${heightOfContent}px`);
		//qestionContainer-container
		setTimeout(e => {
			qestionContainer.classList.add("height-is-set");
			content.setAttribute("aria-hidden", "true");
		}, 0);
	});
}

function wireUpTriggers() {
	qestionContainers.forEach(qestionContainer => {
		// Получение каждого элемента триггера
		let btn = qestionContainer.querySelector(".trigger");
		// Получить содержимое
		let content = qestionContainer.querySelector(".content");
		btn.addEventListener("click", () => {
			qestionContainer.setAttribute(
				"data-drawer-showing",
				qestionContainer.getAttribute("data-drawer-showing") === "true" ? "false" : "true"
			);
			content.setAttribute(
				"aria-hidden",
				content.getAttribute("aria-hidden") === "true" ? "false" : "true"
			);
		});
	});
}