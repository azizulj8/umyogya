<h3 class="page-title"> Search BUJS</h3>
<div class="row" style="    border: 1px solid #e7ecf1;
    padding: 20px;margin-left: 0px;margin-right: 0px;margin-bottom: 20px;">
    <div class="col-md-9">
        <!-- <form action="#" class="alert alert-success alert-borderless"> -->
        <div class="input-group">
            <div class="input-cont">
                <input style="height: 55px;" type="text" onkeyup="myFunction()" id="search" class="form-control" placeholder="Search for Title...">
            </div>
            <span class="input-group-btn">
            <button style="height: 55px;" type="button" class="btn green-haze">
            Search &nbsp; <i class="m-icon-swapright m-icon-white"></i>
            </button>
            </span>
        </div>
    </div>
        <!-- </form> -->
    <div class="col-md-2" style="float:left;cursor: pointer;padding-left: 0px;width: 60px">
            <a href="<?=base_url("uploads/FORM PENDAFTARAN BUJS.docx");?>"><img src="<?=base_url("assets/global/img/Documents.png");?>" width="55" title="Downoad Form BUJS"></a>
    </div>
    <div class="col-md-2">
        <button style="height: 55px;" class="btn grey-cararra font-blue" type="button" onclick="location.href='<?=base_url("submit_essay");?>'">Submit New BUJS</button>
    </div>
</div>
<!-- <div class="row">
    <div class="col-lg-9">
        <div class="input-group">
            <input type="text" onkeyup="myFunction()" id="search" class="form-control" placeholder="Search for Title...">
            <span class="input-group-btn">
                <button class="btn green-soft uppercase bold" id="search-button" type="button">Search</button>
            </span>
        </div>
    </div>
    <div class="col-lg-1 extra-buttons" style="float:left;cursor: pointer;">
    	<a href="<?=base_url("uploads/FORM PENDAFTARAN BUJS.docx");?>"><img src="<?=base_url("assets/layouts/layout/img/Documents.png");?>" width="54" title="Downoad Form BUJS"></a>
    </div>
    <div class="col-lg-2 extra-buttons">
        <button class="btn grey-cararra font-blue" type="button" onclick="location.href='<?=base_url("essay");?>'">Submit New BUJS</button>
    </div>
</div>-->
<style type="text/css">
    #myTable th{
        padding: 10px;
    }
</style>
<div class="search-table table-responsive">
    <table class="table table-bordered table-striped table-condensed" id="myTable">
        <thead class="bg-blue" style="color: #fff">
            <tr>
                <th>Date</th>
                <th>Title & Author</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        <?php        
        if($dt_essay->num_rows()>0){
            foreach ($dt_essay->result() as $row) {
            echo '<tr>
                <td class="table-date font-blue">
                    <h4>'.date('M d',strtotime($row->create_date)).', '.date('Y',strtotime($row->create_date)).'</h4>
                </td>
                <td class="table-title">
                    <h4>
                        <a href="javascript:;">'.$row->title.'</a>
                    </h4>
                    <p>Uploaded By:
                        <a href="javascript:;">'.$row->nim.'</a>
                        <!-- <span class="font-grey-cascade">25 mins ago</span> -->
                    </p>
                </td>
                <td class="table-desc"> 
                    '.$row->topic.'
                </td>
            </tr>';
            }
        }else{
            echo '<tr>
                <td align="center" colspan="3" class="table-date font-blue">Data Not Found</td>
                </tr>';
        }
        ?>
        </tbody>
    </table>
</div>

<script type="text/javascript">
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    // td_1 = tr[i].getElementsByTagName("td")[1];
    // td_2 = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>