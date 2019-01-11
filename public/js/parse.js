$(function(){
$('.parse').click(function(){
var url = $('#parse_aliexpress').val();
var id = $(this).attr('data-id');
console.log(url, id);
$('.parse').click(function(){
var url = $('#parse_aliexpress').val();
var id = $(this).attr('data-id');
 $.ajax({
  type: 'get',
  data: 'id='+id+'&url='+url,
  url: '/ajax/parse/catalog',
  beforeSend: function(){
   $('#empty').html('<img src="public/media/img/gif.gif"');
  },
  success: function(data){
   $('#empty').html(data);    
  },
  error: function(msg){
   console.log(msg);
  }
 });
});



});
});