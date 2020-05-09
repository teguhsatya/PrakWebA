let sortDirection = false;
let bookData = [
    {bookName : 'Dilan 1990', bookYear: 2014},
    {bookName : 'Bumi Manusia', bookYear: 1980},
    {bookName : 'Nanti Kita Cerita Tentang Hari Ini', bookYear: 2018}

];

window.onload = ()=>{
    loadTable(bookData);
};

function loadTable(bookData) {
    const tableBody = document.getElementById('bookData');
    let dataHTML = '';
    for (let book of bookData) {
        dataHTML += `<tr><td>${book.bookName}</td><td>${book.bookYear}</td></tr>`;
    }
    console.log(dataHTML);

    tableBody.innerHTML = dataHTML;
  }

function sortColumn(columnName) {
    const dataType = typeof bookData[0][columnName];
    sortDirection != sortDirection;
    switch (dataType) {
        case 'number':
            sortNumberColumn(sortDirection, columnName);
            break;
    }
    loadTable(bookData);
}

function sortNumberColumn(sort, columnName) { 
    bookData = bookData.sort((p1,p2)=>{
        return sort ? p1[columnName] - p2[columnName] : 
        p2[columnName] - p1[columnName]
    });
 }