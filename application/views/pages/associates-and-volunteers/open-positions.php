<h1>Open Positions</h1>

<p>Our current internships and volunteer opportunities are listed below. If you do not see anything of interest, you can still <a href="<?= base_url('associates-and-volunteers/submit-resume.html') ?>">Submit Your Resume</a>.
Check this page often for new opportunities.</p>

<div id="toggleJobList">
        <span id="expandJobList">Expand all</span> | <span id="collapsJobList">Collapse all</span>
</div>

<!-- PARSE RSS FEED -->
<?php foreach ($rss as $item) {?>
    <div class="plusOrMinusmark">
        <span class="plusMark">[+]</span><span class="minusMark">[-]</span>
    </div>
    <div class="jobItem">
        <div class="vacancyTitle">
            <h2><?= $item['title']; ?></h2>
        </div>

        <div class="vacancyShortDescription"><?= str_replace("\n", " ", substr ($item['description'], 0, 249)); ?>...</pre></div>
        <div class="vacancyDescription"><?= $item['description']; ?></div>

        <p class="borderBottom">
           <input type="button" class="apply" name="applyButton" value="Apply" />
           <a href="<?= base_url('associates-and-volunteers/submit-resume/' . str_replace(' ', '%20', $item['title']) . '.html');?>" class="applyLink"></a>
        </p>                
    </div>
<?php   }?>