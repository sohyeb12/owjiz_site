<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" type="image/png" sizes="32x32" href="logo-40.ico" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>OWjiz</title>
</head>

<body>
  <form action="{{ route('links.store') }}" method="post">
    @csrf
    <h1><span>OW</span>jiz/<span>أو</span>جز</h1>
    <div class="rectangle">
      <label class="font-eql" for="input-1">The Link</label>
      <input name="link" type="text" id="input-1" type="text" placeholder="The Link" />

      <label class="label-mar font-eql" for="input-2">Suggested keywords</label>
      <input name="suggestd_word" type="text" id="input-2" type="text" placeholder="Suggested keywords" />

      <button type="submit" class="btn">OWjiz</button>
    </div>
  </form>

  @if(Session::has('message'))
  <script>
    swal({
      title: "The New Link",
      icon: "success",
      button: true,
      button: "OK",
      content: {
        element: "input",
        attributes: {
          value: "{{ Session::get('message') }}",
          type: "text",
        },
      },
    });
  </script>
  @endif

</body>

</html>