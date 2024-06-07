document.addEventListener("DOMContentLoaded", () => {
  const prevMonth = document.getElementById("prevMonth");
  const nextMonth = document.getElementById("nextMonth");
  const monthYear = document.getElementById("monthYear");
  const datesContainer = document.getElementById("dates");

  let currentDate = new Date();

  prevMonth.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
  });

  nextMonth.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
  });

  function renderCalendar() {
    const month = currentDate.getMonth();
    const year = currentDate.getFullYear();
    monthYear.textContent = `${new Intl.DateTimeFormat("pt-BR", {
      month: "long",
    }).format(currentDate)} ${year}`;

    const firstDayOfMonth = new Date(year, month, 1).getDay();
    const lastDateOfMonth = new Date(year, month + 1, 0).getDate();
    const lastDayOfLastMonth = new Date(year, month, 0).getDate();

    datesContainer.innerHTML = "";

    for (let i = firstDayOfMonth; i > 0; i--) {
      const dateElement = document.createElement("div");
      dateElement.className = "calendar-date text-muted";
      dateElement.textContent = lastDayOfLastMonth - i + 1;
      datesContainer.appendChild(dateElement);
    }

    for (let i = 1; i <= lastDateOfMonth; i++) {
      const dateElement = document.createElement("div");
      dateElement.className = "calendar-date";
      dateElement.textContent = i;
      datesContainer.appendChild(dateElement);
    }
  }

  renderCalendar();
});
