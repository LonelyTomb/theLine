@php
	if ($theme === 'success'){
		$theme = 'bg-success';
		$title = 'Success';
	}elseif ($theme === 'error'){
		$theme = 'bg-danger';
		$title = 'Error';
	}else{
		$theme = 'bg-indigo bg-info';
	}
@endphp
<script>
  $(document).ready(function () {
    new PNotify({
      title: '{{$title}}',
      text: '{{$text}}',
      addclass: 'alert {{$theme}} alert-styled-left alert-arrow-left'
    })
  })
</script>