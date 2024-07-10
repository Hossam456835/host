
const checker = document.querySelectorAll(".category");
const tbody = document.getElementById("tbody");
const pagination = document.getElementById("pagination");
const search = document.querySelector(".search");

const rowsPerPage = 10;
let currentPage = 1;

let tableData = [
  {
    tld: ".com .org .eu .net .io .ai .co.uk .ca .dev .me .co .de .app .in .is .gg .to .ph .nl .id .inc .website .xyz .club .online .info .store .best .live .us .tech .pw .pro .uk .tv .cx .mx .fm .cc .world .space .vip .life .shop .host .fun .biz .icu .design .art",
    registration:
      "$10.28 $7.48 $4.98 $12.98 $44.98 $79.98 $6.98 $11.98 $8.98 $7.98 $10.98 $6.98 $10.98 $7.98 $45.98 $68.98 $29.98 $52.98 $6.98 $22.98 $998.98 $1.88 $2.00 $4.98 $0.98 $3.48 $0.98 $3.98 $3.48 $3.48 $7.97 $6.89 $2.98 $6.98 $29.98 $19.98 $39.98 $69.96 $5.89 $5.89 $2.48 $1.88 $4.98 $2.48 $0.98 $14.99 $1.28 $5.96 $1.60 $4.48 $3.96",
    renewal:
      "$10.48 $10.48 = $12.98 $45.98 $145 $0.00 $10.98 $14.98 $16.98 $26.98 = $13.98 $7.98 = $68.98 $29.98 $68.89 $6.98 $22.98 $2.098.00 $21.98 $12.98 $14.98 $26.88 $19.98 $42.88 = $26.98 $7.98 $42.98 $1.88 $21.98 $0.00 $28.98 $19.98 $39.98 $99.98 $10.98 $31.98 $21.98 $5.98 $30.98 $30.98 $30.98 $69.88 $26.98 $11.98 $49.98 $25.98",
    transfer:
      "$10.48 $10.48 = $12.98 $45.98 $145 $0.00 $10.98 $14.98 $16.98 $26.98 = $13.98 $7.98 = $68.98 $29.98 $68.89 $6.98 $22.98 $2.098.00 $21.98 $12.98 $14.98 $26.88 $19.98 $42.88 = $26.98 $7.98 $42.98 $1.88 $21.98 $0.00 $28.98 $19.98 $39.98 $99.98 $10.98 $31.98 $21.98 $5.98 $30.98 $30.98 $30.98 $69.88 $26.98 $11.98 $49.98 $25.98",
    protection:
      "$10.28 $7.48 $4.98 $12.98 $44.98 $79.98 $6.98 $11.98 $8.98 $7.98 $10.98 $6.98 $10.98 $7.98 $45.98 $68.98 $29.98 $52.98 $6.98 $22.98 $998.98 $1.88 $2.00 $4.98 $0.98 $3.48 $0.98 $3.98 $3.48 $3.48 $7.97 $6.89 $2.98 $6.98 $29.98 $19.98 $39.98 $69.96 $5.89 $5.89 $2.48 $1.88 $4.98 $2.48 $0.98 $14.99 $1.28 $5.96 $1.60 $4.48 $3.96",
  },
];

const data = tableData[0];
const tlds = data.tld.split(" ");
const registrations = data.registration.split(" ");
const renewals = data.renewal.split(" ");
const transfers = data.transfer.split(" ");
const protections = data.protection.split(" ");

let filteredTlds = [...tlds];

function displayTable(page, tldsArray) {
  tbody.innerHTML = "";
  const start = (page - 1) * rowsPerPage;
  const end = start + rowsPerPage;
  const pageItems = tldsArray.slice(start, end);

  pageItems.forEach((tld, index) => {
    const actualIndex = tlds.indexOf(tld);
    const row = `<tr>
            <th class="p-4" scope="row">${tld}</th>
            <td class="p-4">${registrations[actualIndex]}</td>
            <td class="p-4">${renewals[actualIndex]}</td>
            <td class="p-4">${transfers[actualIndex]}</td>
            <td class="p-4">${protections[actualIndex]}</td>
        </tr>`;
    tbody.innerHTML += row;
  });
}

function setupPagination(tldsArray) {
  pagination.innerHTML = "";
  const pageCount = Math.ceil(tldsArray.length / rowsPerPage);

  const prevButton = paginationButton("Prev", tldsArray);
  pagination.appendChild(prevButton);

  for (let i = 1; i <= pageCount; i++) {
    const btn = paginationButton(i, tldsArray);
    pagination.appendChild(btn);
  }

  const nextButton = paginationButton("Next", tldsArray);
  pagination.appendChild(nextButton);
}

function paginationButton(page, tldsArray) {
  const button = document.createElement("button");
  button.innerText = page;

  if (page === currentPage) button.classList.add("active");

  button.addEventListener("click", () => {
    if (page === "Prev" && currentPage > 1) {
      currentPage--;
    } else if (
      page === "Next" &&
      currentPage < Math.ceil(tldsArray.length / rowsPerPage)
    ) {
      currentPage++;
    } else if (typeof page === "number") {
      currentPage = page;
    }

    displayTable(currentPage, tldsArray);

    const currentBtn = document.querySelector("#pagination button.active");
    if (currentBtn) currentBtn.classList.remove("active");

    const buttons = document.querySelectorAll("#pagination button");
    buttons.forEach((btn) => {
      if (parseInt(btn.innerText) === currentPage) {
        btn.classList.add("active");
      }
    });
  });

  return button;
}

search.addEventListener("input", () => {
  const searchValue = search.value.trim().toLowerCase();
  console.log(search.value);
  filteredTlds = tlds.filter((tld) => tld.includes(searchValue));
  currentPage = 1;
  displayTable(currentPage, filteredTlds);
  setupPagination(filteredTlds);
});

// Initial display
displayTable(currentPage, tlds);
setupPagination(tlds);
checker.forEach((e ,index) => {
  e.addEventListener("click", () => {
    e.classList.toggle("active");
    document.querySelectorAll(".checker")[index].classList.toggle('hidden');
  });
});
