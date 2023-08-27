const timeElement = document.querySelector(".time");
const dateElement = document.querySelector(".date");
  
  /**
   * @param {Date} date
   */
  function formatTime(date) {
    const hours12 = date.getHours() % 12 || 12;
    const minutes = date.getMinutes();
    const seconds = date.getSeconds();
    const isAm = date.getHours() < 12;
  
    return `${hours12.toString().padStart(2, "0")}:${minutes.toString().padStart(2, "0")}:${seconds.toString().padStart(2, "0")} ${isAm ? "AM" : "PM"}`;
  }
  
  /**
   * @param {Date} date
   */
  function formatDate(date) {
    const DAYS = [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday"
    ];
    const MONTHS = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December"
    ];
  
    return `${DAYS[date.getDay()]}, ${
      MONTHS[date.getMonth()]
    } ${date.getDate()} ${date.getFullYear()}`;
  }
  
  setInterval(() => {
    const now = new Date();
    const timeString = formatTime(now);
    const dateString = formatDate(now);

    
    timeElement.textContent = `${dateString}, ${timeString}`;
  }, 200);

  //responsive-sidebar-submenu at 768px
  const optionMenu = document.querySelector(".select-menu"),
	selectBtn = optionMenu.querySelector(".select-btn"),
	options = optionMenu.querySelectorAll(".option"),
	sBtn_text = optionMenu.querySelector(".sBtn-text");

selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));       

 options.forEach(option =>{
 option.addEventListener("click", ()=>{
	 let selectedOption = option.querySelector(".option-text").innerText;
	 sBtn_text.innerText = selectedOption;

	 optionMenu.classList.remove("active");
 })
})
  //burger-function
function myBurger(x) {
  x.classList.toggle("change");
}

