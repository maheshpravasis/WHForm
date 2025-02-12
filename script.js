document.getElementById('requestForm').addEventListener('submit', function (event) {
    const fromDate = new Date(document.getElementById('from_date').value);
    const toDate = new Date(document.getElementById('to_date').value);

    if (fromDate > toDate) {
        alert('From Date cannot be greater than To Date.');
        event.preventDefault();
    }
});