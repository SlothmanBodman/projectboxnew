<div class="content-container-clear">
    <!--New Post Form-->
    <button id="new-post-btn" style="width: 100%;" class="new-post-btn" name="button" type="button">New Post</button>
  </div>

  <div class="content-container">
    <div class="content-container-header">
      <p class="small-header">Quick Project</p>
    </div>
    <div class="content-container-body">
      <p class="paragraph">Use the button bellow to generate a random project!</p>
        <button style="width: 100%;"id="generate" onclick="getProject()">Generate!</button>
    </div>
  </div>
  <div id="rand-prj-container-2" class="content-container hidden">
    <p id="rand-project-2" class="paragraph">
      <span id="displayOne-2"></span>
      <span id="projectResult-2"></span>
      <span id="displayTwo-2"></span>
      <span id="nameResult-2"></span>
      <span id="companyResult-2"></span>
    </p>
  </div>
