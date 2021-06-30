<script src="dataTable/jquery.js"></script>
<script src="dataTable/jquery.dataTables.min.js"></script>
<script src="dataTable/dataTables.bootstrap4.min.js"></script>


<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });

  $(document).ready(function() {
    setDatePicker()
    setDateRangePicker(".startdate", ".enddate")
    setMonthPicker()
    setYearPicker()
    setYearRangePicker(".startyear", ".endyear")
  })


  $(document).ready(function() {
    $("#domainsTable").tablesorter({
      sortList: [
        [3, 1],
        [2, 0]
      ]
    });
  });

  function searchTable() {
    var input;
    var saring;
    var status;
    var tbody;
    var tr;
    var td;
    var i;
    var j;
    input = document.getElementById("input");
    saring = input.value.toUpperCase();
    tbody = document.getElementsByTagName("tbody")[0];;
    tr = tbody.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td");
      for (j = 0; j < td.length; j++) {
        if (td[j].innerHTML.toUpperCase().indexOf(saring) > -1) {
          status = true;
        }
      }
      if (status) {
        tr[i].style.display = "";
        status = false;
      } else {
        tr[i].style.display = "none";
      }
    }
  }
</script>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
