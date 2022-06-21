let documentBody = document.querySelector("body");

// Показать больше контента внутри группы фильтра
let groupBtns = document.querySelectorAll(".expand-group__button");
let hiddenGroups = document.querySelectorAll(".hidden-group");

for (let groupBtn of groupBtns) {
  for (let hiddenGroup of hiddenGroups) {
    groupBtn.addEventListener("click", () => {
      if (hiddenGroup.style.display !== "block") {
        hiddenGroup.style.display = "block";
        groupBtn.textContent = "Скрыть";
      } else {
        hiddenGroup.style.display = "none";
        groupBtn.innerHTML = "Ещё 5 направлений";
      }
    });
  }
}

// Добавляющиеся кнопки фильтров
let filters = documentBody.querySelector(".filters");
let expertCards = document.querySelector(".expert-cards");
let filtersContent = documentBody.querySelector('.filters__content');

// Кнопки фильтров
let filterTags = document.createElement("div");
filterTags.classList.add("filter-tags");
expertCards.insertAdjacentElement("beforebegin", filterTags);

// Кнопки филь тров мобильные
let filterTagsMobile = document.createElement("div");
filterTagsMobile.classList.add("filter-tags-mobile");
filtersContent.insertAdjacentElement("beforebegin", filterTagsMobile);

let filtersBtn = documentBody.querySelector(".filters-btn");
let filtersClose = documentBody.querySelector('.filters-close');

// Отслеживание нажатия чекбоксов в мобильном меню и применение количества фильтров
let allCheckboxes = documentBody.querySelectorAll("input[type=checkbox]");
let mobileFilterBtn = documentBody.querySelector(".filters-btn");
var filtersAppliedInside = document.querySelector(".count-filters-applied-inside");
var filtersAppliedOutside = document.querySelector(".count-filters-applied-outside");
let filtersImg = document.querySelector(".filters-img");

let showEventsBtn = document.querySelector(".show-events-btn");

let checkedCounter = 0;

filtersBtn.addEventListener('click', () => {
  filters.style.display = 'block';
})

filtersClose.addEventListener('click', () => {
  filters.style.display = 'none';
})

for (let checkbox of allCheckboxes) {
  checkbox.addEventListener("click", () => {
    let labelEl = documentBody.querySelector(`[for=${checkbox.id}]`);
    let spanEl = labelEl.querySelector("span").textContent;

    if (checkbox.checked) {
      // Создание кнопки фильтра
      var filterApplied = document.createElement("div");
      filterApplied.classList.add("filter-applied");
      filterApplied.setAttribute('data-link', checkbox.id);
      filterApplied.textContent = spanEl;

      if (window.innerWidth > 768) {
        filterTags.prepend(filterApplied);
      } else {
        filterTagsMobile.prepend(filterApplied);
      }
      

      // Создание крестика внутри кнопки
      var filterRemoveImg = document.createElement("div");
      filterRemoveImg.classList.add("remove-filter-icon");
      filterApplied.append(filterRemoveImg);

      // Создание кнопки "Сбросить"
      var refreshBtn = document.createElement('div');
      refreshBtn.classList.add('refresh-btn');
      refreshBtn.textContent = 'Очистить все';
      if (!filterTags.querySelector('.refresh-btn')) {
        refreshBtn.remove();
        filterTags.append(refreshBtn);
        refreshBtn.addEventListener('click', () => {
          filtersAppliedInside.style.display = "none";
          filtersAppliedOutside.style.display = "none";
          for (let checkbox of allCheckboxes) {
            checkbox.checked = false;
          }
          let allFiltersApplied = documentBody.querySelectorAll(".filter-applied");
          for (let filterApplied of allFiltersApplied) {
              filterApplied.remove();
              
          }
          refreshBtn.remove();
          
        })
      } 
      if (!filterTags.querySelector('.refresh-btn')) {
        refreshBtn.remove();
        filterTags.append(refreshBtn);
        // Сбросить фильтры
        refreshBtn.addEventListener('click', () => {
          filtersAppliedInside.style.display = "none";
          filtersAppliedOutside.style.display = "none";
          for (let checkbox of allCheckboxes) {
            checkbox.checked = false;
          }
          let allFiltersApplied = documentBody.querySelectorAll(".filter-applied");
          for (let filterApplied of allFiltersApplied) {
              filterApplied.remove();
          }
          refreshBtn.remove();
        })
      } 
      if (!filterTagsMobile.querySelector('.refresh-btn')) {
        refreshBtn.remove();
        filterTagsMobile.append(refreshBtn);

        // Сбросить фильтры
        refreshBtn.addEventListener('click', () => {
          filtersAppliedInside.style.display = "none";
          filtersAppliedOutside.style.display = "none";
          for (let checkbox of allCheckboxes) {
            checkbox.checked = false;
          }
          let allFiltersApplied = documentBody.querySelectorAll(".filter-applied");
          for (let filterApplied of allFiltersApplied) {
              filterApplied.remove();
          }
          refreshBtn.remove();
        })
      } 
      

    } else {
      let allFiltersApplied = documentBody.querySelectorAll(".filter-applied");
      for (let filterApplied of allFiltersApplied) {
        if (filterApplied.textContent === spanEl) {
          filterApplied.remove();
        }
      }
    }

    if (filterRemoveImg) {
      if (window.innerWidth < 769) {
        filterApplied.addEventListener('click', () => {
          uncheckBox(filterApplied, refreshBtn);
          checkBoxCounter();
        })
      } else {
        filterRemoveImg.addEventListener('click', () => {
          uncheckBox(filterApplied, refreshBtn);
          checkBoxCounter();
        })
      }
    }
  
    checkBoxCounter();
    
  });
}


// Раскрывающийся аккордеон в мобильном меню
const accordionBtns = document.querySelectorAll(".accordion");

accordionBtns.forEach((accordion) => {
  accordion.onclick = function () {
    this.classList.toggle("is-open");

    let content = this.nextElementSibling;

    if (content.style.maxHeight) {
      //this is if the accordion is open
      content.style.maxHeight = null;
      //   content.style.borderBottom = 'none';
    } else {
      //if the accordion is currently closed
      content.style.maxHeight = "100%";
      //   content.style.borderTop = '1px solid #a2abaa';
    }
  };
});



// Описание функций
function checkBoxCounter() {
  // Добавление нажатого фильтра тегом
  let checkedCheckboxes = documentBody.querySelectorAll("input:checked");
  checkedCounter = checkedCheckboxes.length;
  if (checkedCounter > 0) {
    filtersAppliedOutside.style.backgroundColor = "#29767E";
    filtersAppliedInside.style.backgroundColor = "#29767E";
    filtersAppliedInside.style.display = "block";
    filtersAppliedOutside.style.display = "block";

    filtersAppliedOutside.textContent = `${checkedCounter}`;
    filtersAppliedInside.textContent = `${checkedCounter}`;
  } else if (checkedCounter === 0) {
    if (documentBody.querySelector('.refresh-btn')) {
      var refreshBtns = documentBody.querySelectorAll('.refresh-btn');
      for (let refreshBtn of refreshBtns) {
        refreshBtn.remove();
      }
    }
    filtersAppliedInside.style.display = "none";
    filtersAppliedOutside.style.display = "none";
  }
}

function uncheckBox(filterApplied, refreshBtn) {
  let uncheckBox = filters.querySelector(`#${filterApplied.dataset.link}`);
      uncheckBox.checked = false;
      filterApplied.remove();
      if (documentBody.querySelectorAll('.filter-applied').length === 0) {
        refreshBtn.remove();
      }
}