$(document).ready(function() {
    $('#example').DataTable({
        "paging": true,       // Enable pagination
        "lengthChange": true, // Show entries per page
        "searching": true,    // Enable search
        "ordering": true,     // Enable column sorting
        "info": true,         // Show info (Showing 1 to n of n entries)
        "autoWidth": false,   // Disable auto column width
        "responsive": true    // Make table responsive
    })
    console('hello');
});