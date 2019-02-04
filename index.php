<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Description" content="Web frontend for youtube-dl by Niobisoft">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="static/style.css" rel="stylesheet">
  <title>Youtube downloader by Niobisoft</title>
</head>
<body>

  <body>
    <div class="container d-flex flex-column text-light text-center">
      <div class="flex-grow-1"></div>
      <div class="jumbotron bg-transparent flex-grow-1">
        <h1 class="display-4">youtube-dl</h1>
        <p class="lead">Enter a video url to download the video to the server. Url can be to YouTube or <a class="text-info"
            href="https://rg3.github.io/youtube-dl/supportedsites.html">any
            other supported site</a>. The server will automatically download the highest quality version available.</p>
        <hr class="my-4">
        <div>
          <form action="download.php" method="post">
            <div class="input-group">
              <input name="url" type="url" class="form-control" placeholder="URL" aria-label="URL" aria-describedby="button-submit">
              <select class="custom-select" name="format">
                <optgroup label="Video">
                  <option value="bestvideo">Best Video</option>
                  <option value="mp4">MP4</option>
                  <option value="flv">Flash Video (FLV)</option>
                  <option value="webm">WebM</option>
                  <option value="ogg">Ogg</option>
                  <option value="mkv">Matroska (MKV)</option>
                  <option value="avi">AVI</option>
                </optgroup>
                <optgroup label="Audio">
                  <option value="bestaudio">Best Audio</option>
                  <option value="aac">AAC</option>
                  <option value="flac">FLAC</option>
                  <option value="mp3">MP3</option>
                  <option value="m4a">M4A</option>
                  <option value="opus">Opus</option>
                  <option value="vorbis">Vorbis</option>
                  <option value="wav">WAV</option>
                </optgroup>
              </select>
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="button-submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <footer>
        <div>
          <p class="text-muted">Web frontend for <a class="text-light" href="https://rg3.github.io/youtube-dl/">youtube-dl</a>,
            by <a class="text-light" href="https://twitter.com/manbearwiz">@manbearwiz</a>.</p>
        </div>
      </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>






  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
