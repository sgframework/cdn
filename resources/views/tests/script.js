<select>
  <option value="red">red</option>
  <option value="black">black</option>
  <option value="blue">blue</option>
</select>
<input type="text" id="input" value="">
<div id="output"></div>

<script>
$(document).ready(function(){
    $("select").change(function(){
        $("input[type=text]").val($(this).val());
    });
});
    </script>