<div class="row">
    <h1>{who}</h1>
	<div class="span2"><img src="/data/{mug}" title="{who}"/></div>
    <p class="lead">{what}</p><br/>
	<select name="stocks" onchange="location = this.options[this.selectedIndex].value;">
		<option selected disabled class="hideoption">{who}</option>
		<option value="1">{one}</option>
		<option value="2">{two}</option>
		<option value="3">{three}</option>
		<option value="4">{four}</option>
		<option value="5">{five}</option>
		<option value="6">{six}</option>
	</select>
</div>