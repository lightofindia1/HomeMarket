<link type='text/css' href="//fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
<!-- Das FAB -->
<button class="btn btn-warning btn-fab demo-switcher-fab" data-toggle="tooltip" data-placement="top" title="Click for Settings"><i class="material-icons">settings</i></button>

<!-- Switcher -->
    <div class="demo-options">
        <div class="demo-body">
			<div class="option-title">Options</div>
			<div class="tabular">
                <div class="tabular-row">
                    <div class="tabular-cell">Speech Recognition <a href="#." data-toggle="modal" data-target="#speechModal" title="Click for Info"><i class="fa fa-info-circle"></i></a></div>
                    <div class="tabular-cell demo-switches text-right">
                        <div class="togglebutton checkbox-primary">
                            <label>
                                <input type="checkbox" name="speech_rec" checked="checked" id="srec"/>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="tabular-row">
                    <div class="tabular-cell">Speech Synthesis</div>
                    <div class="tabular-cell demo-switches text-right">
                        <div class="togglebutton checkbox-primary">
                            <label>
                                <input type="checkbox" name="speech_syn" checked="checked" id="ssyn"/>
                            </label>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>

<!-- Small modal -->
	<div class="modal fade" id="speechModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h2 class="modal-title">Speech Recognition Commands</h2>
				</div>
				<div class="modal-body">
					<h4>Hello - <em>Replies with greetings</em></h4>
					<h4>Home - <em>Redirects to home page</em></h4>
					<h4>Login - <em>Redirects to login page</em></h4>
					<h4>Register (Signup) - <em>Redirects to registration page</em></h4>
					<h4>Settings - <em>Redirects to settings page</em></h4>
					<h4>Buy Now - <em>Redirects to buyers section</em></h4>
					<h4>Sell Now - <em>Redirects to sellers section</em></h4>
					<h4>Find Tutor - <em>Redirects to students section</em></h4>
					<h4>Teach Now - <em>Redirects to tutors section</em></h4>
					<h5 align="center">More coming soon</h5>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
$(document).ready(function(){
	$('.tooltips, [data-toggle="tooltip"]').tooltip();
	var srec=localStorage.getItem("srec");
	var ssyn=localStorage.getItem("ssyn");
	if(srec=="off"){
		$("#srec").prop("checked", false);
	}
	else if(srec=="on"){
		$("#srec").prop("checked", true);
	}
	else{
		localStorage.setItem("srec","on");
	}
	if(ssyn=="off"){
		$("#ssyn").prop("checked", false);
	}
	else if(ssyn=="on"){
		$("#ssyn").prop("checked", true);
	}
	else{
		localStorage.setItem("ssyn","on");
	}
	$('#srec').change(function() {
	  if ($(this).is(':checked')) {
		localStorage.setItem("srec","on");
		startRec();
		annyang.start();
	  } else {
		localStorage.setItem("srec","off");
		annyang.abort();
	  }
	});
	$('#ssyn').change(function() {
	  if ($(this).is(':checked')) {
		localStorage.setItem("ssyn","on");
	  } else {
		localStorage.setItem("ssyn","off");
	  }
	});
	//Show Switcher
	$(".demo-switcher-fab").click(function () {
		$('.demo-options').toggleClass("active");
		$('.demo-switcher-fab').toggleClass("toggle-rotate btn-danger");
	});
});
</script>