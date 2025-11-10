// last modified listener
document.addEventListener('DOMContentLoaded', function() {
    const lastModified = new Date(document.lastModified);
    const formattedDate = lastModified.toISOString().split('T')[0];
    document.getElementById('last-modified-date').textContent = formattedDate;
});
