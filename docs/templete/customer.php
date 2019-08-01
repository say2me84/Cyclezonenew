<?php
    include("header.php");
    include("sidebar.php");
?>
<section class="ng-scope"><!-- uiView:  --><div ui-view="" autoscroll="false" ng-class="app.views.animation" class="app ng-scope ng-fadeInLeft2"><!-- uiView:  --><div ui-view="" ng-class="app.views.animation" class="ng-scope ng-fadeInLeft2"><div class="app-view-header ng-scope">Form Inputs <small>Classic and new components</small></div><div ng-controller="FormInputController as form" class="container-fluid ng-scope"><div class="panel panel-default"><h4 class="panel-heading">Classic inputs</h4><div class="panel-body"><form method="get" action="http://geedmo.com/" novalidate="" class="form-horizontal ng-pristine ng-valid"><fieldset><div class="form-group"><label for="input-id-1" class="col-sm-2 control-label">Text</label><div class="col-sm-10"><input id="input-id-1" type="text" class="form-control"></div></div></fieldset><fieldset><div class="form-group"><label for="input-id-1" class="col-sm-2 control-label">Shadow</label><div class="col-sm-10"><input id="input-id-1" type="text" class="form-control shadow-z1"></div></div></fieldset><fieldset><div class="form-group"><label class="col-sm-2 control-label">Password</label><div class="col-sm-10"><input type="password" name="password" class="form-control"></div></div></fieldset><fieldset><div class="form-group"><label class="col-sm-2 control-label">Rounded Corners</label><div class="col-sm-10"><input type="text" class="form-control form-control-rounded"></div></div></fieldset><fieldset><div class="form-group"><label class="col-sm-2 control-label">With help</label><div class="col-sm-10"><input type="text" class="form-control"> <span class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Placeholder</label>
                  <div class="col-sm-10">
                     <input type="text" placeholder="placeholder" class="form-control">
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Disabled</label>
                  <div class="col-sm-10">
                     <input type="text" placeholder="Disabled input here..." disabled="" class="form-control">
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Static control</label>
                  <div class="col-sm-10">
                     <p class="form-control-static">email@demo.com</p>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Checkboxes and radios</label>
                  <div class="col-sm-10">
                     <div class="checkbox">
                        <label>
                           <input type="checkbox" value="">Option one is this and that—be sure to include why it's great</label>
                     </div>
                     <div class="radio">
                        <label>
                           <input id="optionsRadios1" type="radio" name="optionsRadios" value="option1" checked="">Option one is this and that—be sure to include why it's great</label>
                     </div>
                     <div class="radio">
                        <label>
                           <input id="optionsRadios2" type="radio" name="optionsRadios" value="option2">Option two can be something else and selecting it will deselect option one</label>
                     </div>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Inline checkboxes</label>
                  <div class="col-sm-10">
                     <label class="checkbox checkbox-inline">
                        <input id="inlineCheckbox1" type="checkbox" value="option1">a</label>
                     <label class="checkbox-inline">
                        <input id="inlineCheckbox2" type="checkbox" value="option2">b</label>
                     <label class="checkbox-inline">
                        <input id="inlineCheckbox3" type="checkbox" value="option3">c</label>
                  </div>
               </div>
            </fieldset>
            <fieldset class="last-child">
               <div class="form-group">
                  <label class="col-sm-2 control-label">Select</label>
                  <div class="col-sm-10">
                     <select name="account" class="form-control m-b">
                        <option value="Option 1">Option 1</option>
                        <option value="Option 2">Option 2</option>
                        <option value="Option 3">Option 3</option>
                        <option value="Option 4">Option 4</option>
                     </select>
                     <br>
                     <div class="row">
                        <div class="col-lg-4">
                           <select multiple="" class="form-control">
                              <option value="Option 1">Option 1</option>
                              <option value="Option 2">Option 2</option>
                              <option value="Option 3">Option 3</option>
                              <option value="Option 4">Option 4</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
            </fieldset>
         </form>
      </div>
   </div>
   <div class="panel panel-default">
      <h4 class="panel-heading">Variants</h4>
      <div class="panel-body">
         <form method="get" action="http://geedmo.com/" novalidate="" class="form-horizontal ng-pristine ng-valid">
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Custom Checkboxes &amp; radios</label>
                  <div class="col-sm-10">
                     <div class="checkbox c-checkbox needsclick">
                        <label class="needsclick">
                           <input type="checkbox" value="" class="needsclick">
                           <span class="fa fa-check"></span>Option one</label>
                     </div>
                     <div class="checkbox c-checkbox">
                        <label>
                           <input type="checkbox" checked="" value="">
                           <span class="fa fa-check"></span>Option two checked</label>
                     </div>
                     <div class="checkbox c-checkbox">
                        <label>
                           <input type="checkbox" checked="" disabled="" value="">
                           <span class="fa fa-check"></span>Option three checked and disabled</label>
                     </div>
                     <div class="checkbox c-checkbox">
                        <label>
                           <input type="checkbox" disabled="" value="">
                           <span class="fa fa-check"></span>Option four disabled</label>
                     </div>
                     <div class="radio c-radio">
                        <label>
                           <input type="radio" name="a" value="option1">
                           <span class="fa fa-circle"></span>Option one</label>
                     </div>
                     <div class="radio c-radio">
                        <label>
                           <input type="radio" name="a" value="option2" checked="">
                           <span class="fa fa-circle"></span>Option two checked</label>
                     </div>
                     <div class="radio c-radio">
                        <label>
                           <input type="radio" value="option2" checked="" disabled="">
                           <span class="fa fa-circle"></span>Option three checked and disabled</label>
                     </div>
                     <div class="radio c-radio">
                        <label>
                           <input type="radio" name="a" disabled="">
                           <span class="fa fa-circle"></span>Option four disabled</label>
                     </div>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Inline checkboxes</label>
                  <div class="col-sm-10">
                     <div class="checkbox-inline c-checkbox">
                        <label>
                           <input id="inlineCheckbox10" type="checkbox" value="option1">
                           <span class="fa fa-check"></span>a</label>
                     </div>
                     <div class="checkbox-inline c-checkbox">
                        <label>
                           <input id="inlineCheckbox20" type="checkbox" value="option2">
                           <span class="fa fa-check"></span>b</label>
                     </div>
                     <div class="checkbox-inline c-checkbox">
                        <label>
                           <input id="inlineCheckbox30" type="checkbox" value="option3">
                           <span class="fa fa-check"></span>c</label>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Circular</label>
                  <div class="col-sm-10">
                     <div class="checkbox c-checkbox c-checkbox-rounded">
                        <label>
                           <input id="roundedcheckbox10" type="checkbox" checked="checked">
                           <span class="fa fa-check"></span>Lorem</label>
                     </div>
                     <div class="checkbox c-checkbox c-checkbox-rounded">
                        <label>
                           <input id="roundedcheckbox20" type="checkbox">
                           <span class="fa fa-check"></span>Ipsum</label>
                     </div>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Inline radios</label>
                  <div class="col-sm-10">
                     <div class="radio-inline c-radio">
                        <label>
                           <input id="inlineradio1" type="radio" name="i-radio" value="option1" checked="checked">
                           <span class="fa fa-circle"></span>a</label>
                     </div>
                     <div class="radio-inline c-radio">
                        <label>
                           <input id="inlineradio2" type="radio" name="i-radio" value="option2">
                           <span class="fa fa-circle"></span>b</label>
                     </div>
                     <div class="radio-inline c-radio">
                        <label>
                           <input id="inlineradio3" type="radio" name="i-radio" value="option3">
                           <span class="fa fa-circle"></span>c</label>
                     </div>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Custom icons</label>
                  <div class="col-sm-10">
                     <div class="radio-inline c-radio">
                        <label>
                           <input id="inlineradio10" type="radio" name="i-radio" value="option1" checked="checked">
                           <span class="fa fa-check"></span>a</label>
                     </div>
                     <div class="radio-inline c-radio">
                        <label>
                           <input id="inlineradio20" type="radio" name="i-radio" value="option2" checked="checked">
                           <span class="fa fa-tint"></span>b</label>
                     </div>
                     <div class="radio-inline c-radio">
                        <label>
                           <input id="inlineradio30" type="radio" name="i-radio" value="option3" checked="checked">
                           <span class="fa fa-user"></span>c</label>
                     </div>
                     <br>
                     <div class="checkbox-inline c-checkbox">
                        <label>
                           <input id="inlinecheckbox10" type="checkbox" value="option1" checked="checked">
                           <span class="fa fa-paperclip"></span>a</label>
                     </div>
                     <div class="checkbox-inline c-checkbox">
                        <label>
                           <input id="inlinecheckbox20" type="checkbox" value="option2" checked="checked">
                           <span class="fa fa-star"></span>b</label>
                     </div>
                     <div class="checkbox-inline c-checkbox">
                        <label>
                           <input id="inlinecheckbox30" type="checkbox" value="option3" checked="checked">
                           <span class="fa fa-phone"></span>c</label>
                     </div>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Switch Small</label>
                  <div class="col-sm-10">
                     <label class="switch switch-sm">
                        <input type="checkbox" checked="checked">
                        <span></span>
                     </label>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Switch</label>
                  <div class="col-sm-10">
                     <label class="switch">
                        <input type="checkbox" checked="checked">
                        <span></span>
                     </label>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Switch Large</label>
                  <div class="col-sm-10">
                     <label class="switch switch-lg">
                        <input type="checkbox" checked="checked">
                        <span></span>
                     </label>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Switch Radio</label>
                  <div class="col-sm-10">
                     <label class="switch">
                        <input type="radio" checked="checked" name="radioSwitch">
                        <span></span>
                     </label>
                     <label class="switch">
                        <input type="radio" name="radioSwitch">
                        <span></span>
                     </label>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Colors</label>
                  <div class="col-sm-2">
                     <label class="switch switch-info">
                        <input type="checkbox" checked="checked">
                        <span></span>
                     </label>
                     <label class="switch switch-danger">
                        <input type="checkbox" checked="checked">
                        <span></span>
                     </label>
                     <label class="switch switch-success">
                        <input type="checkbox" checked="checked">
                        <span></span>
                     </label>
                     <label class="switch switch-warning">
                        <input type="checkbox" checked="checked">
                        <span></span>
                     </label>
                     <label class="switch switch-inverse">
                        <input type="checkbox" checked="checked">
                        <span></span>
                     </label>
                     <label class="switch switch-amber">
                        <input type="checkbox" checked="checked">
                        <span></span>
                     </label>
                     <label class="switch switch-pink">
                        <input type="checkbox" checked="checked">
                        <span></span>
                     </label>
                     <label class="switch switch-purple">
                        <input type="checkbox" checked="checked">
                        <span></span>
                     </label>
                     <label class="switch switch-orange">
                        <input type="checkbox" checked="checked">
                        <span></span>
                     </label>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group has-success">
                  <label class="col-sm-2 control-label">Input with success</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control">
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group has-warning">
                  <label class="col-sm-2 control-label">Input with warning</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control">
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group has-error">
                  <label class="col-sm-2 control-label">Input with error</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control">
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Control sizing</label>
                  <div class="col-sm-10">
                     <input type="text" placeholder=".input-lg" class="form-control input-lg m-b">
                     <br>
                     <input type="text" placeholder="Default input" class="form-control m-b">
                     <br>
                     <input type="text" placeholder=".input-sm" class="form-control input-sm">
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Column sizing</label>
                  <div class="col-sm-10">
                     <div class="row">
                        <div class="col-md-2">
                           <input type="text" placeholder=".col-md-2" class="form-control">
                        </div>
                        <div class="col-md-3">
                           <input type="text" placeholder=".col-md-3" class="form-control">
                        </div>
                        <div class="col-md-4">
                           <input type="text" placeholder=".col-md-4" class="form-control">
                        </div>
                     </div>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Input groups</label>
                  <div class="col-sm-10">
                     <div class="input-group m-b">
                        <span class="input-group-addon">@</span>
                        <input type="text" placeholder="Username" class="form-control">
                     </div>
                     <br>
                     <div class="input-group m-b">
                        <input type="text" class="form-control">
                        <span class="input-group-addon">.00</span>
                     </div>
                     <br>
                     <div class="input-group m-b">
                        <span class="input-group-addon">$</span>
                        <input type="text" class="form-control">
                        <span class="input-group-addon">.00</span>
                     </div>
                     <br>
                     <div class="input-group m-b">
                        <span class="input-group-addon">
                           <input type="checkbox">
                        </span>
                        <input type="text" class="form-control">
                     </div>
                     <br>
                     <div class="input-group">
                        <span class="input-group-addon">
                           <input type="radio">
                        </span>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Button addons</label>
                  <div class="col-sm-10">
                     <div class="input-group m-b">
                        <span class="input-group-btn">
                           <button type="button" class="btn btn-default">Go!</button>
                        </span>
                        <input type="text" class="form-control">
                     </div>
                     <br>
                     <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                           <button type="button" class="btn btn-default">Go!</button>
                        </span>
                     </div>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">With dropdowns</label>
                  <div class="col-sm-10">
                     <div class="input-group m-b">
                        <div dropdown="dropdown" class="input-group-btn">
                           <button type="button" dropdown-toggle="" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false">Action
                              <span class="caret"></span>
                           </button>
                           <ul class="dropdown-menu">
                              <li><a href="">Action</a>
                              </li>
                              <li><a href="">Another action</a>
                              </li>
                              <li><a href="">Something else here</a>
                              </li>
                              <li class="divider"></li>
                              <li><a href="">Separated link</a>
                              </li>
                           </ul>
                        </div>
                        <input type="text" class="form-control">
                     </div>
                     <br>
                     <div class="input-group">
                        <input type="text" class="form-control">
                        <div dropdown="dropdown" class="input-group-btn">
                           <button type="button" dropdown-toggle="" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false">Action
                              <span class="caret"></span>
                           </button>
                           <ul class="dropdown-menu pull-right">
                              <li><a href="">Action</a>
                              </li>
                              <li><a href="">Another action</a>
                              </li>
                              <li><a href="">Something else here</a>
                              </li>
                              <li class="divider"></li>
                              <li><a href="">Separated link</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </fieldset>
            <fieldset class="last-child">
               <div class="form-group">
                  <label class="col-sm-2 control-label">Segmented</label>
                  <div class="col-sm-10">
                     <div class="input-group m-b">
                        <div dropdown="dropdown" class="input-group-btn">
                           <button type="button" tabindex="-1" class="btn btn-default">Action</button>
                           <button type="button" dropdown-toggle="" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                              <span class="caret"></span>
                           </button>
                           <ul class="dropdown-menu">
                              <li><a href="">Action</a>
                              </li>
                              <li><a href="">Another action</a>
                              </li>
                              <li><a href="">Something else here</a>
                              </li>
                              <li class="divider"></li>
                              <li><a href="">Separated link</a>
                              </li>
                           </ul>
                        </div>
                        <input type="text" class="form-control">
                     </div>
                     <br>
                     <div class="input-group">
                        <input type="text" class="form-control">
                        <div dropdown="dropdown" class="input-group-btn">
                           <button type="button" tabindex="-1" class="btn btn-default">Action</button>
                           <button type="button" dropdown-toggle="" class="btn btn-default dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                              <span class="caret"></span>
                           </button>
                           <ul class="dropdown-menu pull-right">
                              <li><a href="">Action</a>
                              </li>
                              <li><a href="">Another action</a>
                              </li>
                              <li><a href="">Something else here</a>
                              </li>
                              <li class="divider"></li>
                              <li><a href="">Separated link</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </fieldset>
         </form>
      </div>
   </div>
   <div class="panel panel-default">
      <h4 class="panel-heading">Advanced inputs</h4>
      <div class="panel-body">
         <form method="get" action="http://geedmo.com/" novalidate="" class="form-horizontal ng-pristine ng-valid-date ng-valid-mask ng-invalid ng-invalid-required ng-valid-time ng-valid-date-disabled ng-valid-maxlength">
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Editor</label>
                  <div class="col-sm-10">
                     <!-- Wysiswyg editor-->
                     <div text-angular="" ng-model="form.htmlContent" name="wysiswyg-editor" class="btn-group-small ng-pristine ng-untouched ng-valid ng-isolate-scope ta-root"><div text-angular-toolbar="" name="textAngularToolbar7497331127524376" class="ng-scope ng-isolate-scope ta-toolbar btn-toolbar"><div class="btn-group"><button type="button" class="btn btn-default ng-scope" name="h1" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Heading 1" unselectable="on" disabled="disabled">H1</button><button type="button" class="btn btn-default ng-scope" name="h2" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Heading 2" unselectable="on" disabled="disabled">H2</button><button type="button" class="btn btn-default ng-scope" name="h3" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Heading 3" unselectable="on" disabled="disabled">H3</button><button type="button" class="btn btn-default ng-scope" name="h4" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Heading 4" unselectable="on" disabled="disabled">H4</button><button type="button" class="btn btn-default ng-scope" name="h5" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Heading 5" unselectable="on" disabled="disabled">H5</button><button type="button" class="btn btn-default ng-scope" name="h6" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Heading 6" unselectable="on" disabled="disabled">H6</button><button type="button" class="btn btn-default ng-scope" name="p" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Paragraph" unselectable="on" disabled="disabled">P</button><button type="button" class="btn btn-default ng-scope" name="pre" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Preformatted text" unselectable="on" disabled="disabled">pre</button><button type="button" class="btn btn-default ng-scope" name="quote" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Quote/unquote selection or paragraph" unselectable="on" disabled="disabled"><i class="fa fa-quote-right"></i></button></div><div class="btn-group"><button type="button" class="btn btn-default ng-scope" name="bold" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Bold" unselectable="on" disabled="disabled"><i class="fa fa-bold"></i></button><button type="button" class="btn btn-default ng-scope" name="italics" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Italic" unselectable="on" disabled="disabled"><i class="fa fa-italic"></i></button><button type="button" class="btn btn-default ng-scope" name="underline" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Underline" unselectable="on" disabled="disabled"><i class="fa fa-underline"></i></button><button type="button" class="btn btn-default ng-scope" name="strikeThrough" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Strikethrough" unselectable="on" disabled="disabled"><i class="fa fa-strikethrough"></i></button><button type="button" class="btn btn-default ng-scope" name="ul" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Unordered List" unselectable="on" disabled="disabled"><i class="fa fa-list-ul"></i></button><button type="button" class="btn btn-default ng-scope" name="ol" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Ordered List" unselectable="on" disabled="disabled"><i class="fa fa-list-ol"></i></button><button type="button" class="btn btn-default ng-scope" name="redo" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Redo" unselectable="on" disabled="disabled"><i class="fa fa-repeat"></i></button><button type="button" class="btn btn-default ng-scope" name="undo" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Undo" unselectable="on" disabled="disabled"><i class="fa fa-undo"></i></button><button type="button" class="btn btn-default ng-scope" name="clear" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Clear formatting" unselectable="on" disabled="disabled"><i class="fa fa-ban"></i></button></div><div class="btn-group"><button type="button" class="btn btn-default ng-scope" name="justifyLeft" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Align text left" unselectable="on" disabled="disabled"><i class="fa fa-align-left"></i></button><button type="button" class="btn btn-default ng-scope" name="justifyCenter" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Center" unselectable="on" disabled="disabled"><i class="fa fa-align-center"></i></button><button type="button" class="btn btn-default ng-scope" name="justifyRight" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Align text right" unselectable="on" disabled="disabled"><i class="fa fa-align-right"></i></button><button type="button" class="btn btn-default ng-scope" name="indent" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Increase indent" unselectable="on" disabled="disabled"><i class="fa fa-indent"></i></button><button type="button" class="btn btn-default ng-scope" name="outdent" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Decrease indent" unselectable="on" disabled="disabled"><i class="fa fa-outdent"></i></button></div><div class="btn-group"><button type="button" class="btn btn-default ng-scope" name="html" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Toggle html / Rich Text" unselectable="on" disabled="disabled"><i class="fa fa-code"></i></button><button type="button" class="btn btn-default ng-scope" name="insertImage" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Insert image" unselectable="on" disabled="disabled"><i class="fa fa-picture-o"></i></button><button type="button" class="btn btn-default ng-scope" name="insertLink" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Insert / edit link" unselectable="on" disabled="disabled"><i class="fa fa-link"></i></button><button type="button" class="btn btn-default ng-scope" name="insertVideo" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" title="Insert video" unselectable="on" disabled="disabled"><i class="fa fa-youtube-play"></i></button><div id="toolbarWC" style="display:block; min-width:100px;" class="btn btn-default ng-scope" name="wordcount" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" unselectable="on" disabled="disabled">Words: <span ng-bind="wordcount" class="ng-binding">0</span></div><div id="toolbarCC" style="display:block; min-width:120px;" class="btn btn-default ng-scope" name="charcount" ta-button="ta-button" ng-disabled="isDisabled()" tabindex="-1" ng-click="executeAction()" ng-class="displayActiveToolClass(active)" unselectable="on" disabled="disabled">Characters: <span ng-bind="charcount" class="ng-binding">0</span></div></div></div><div class="ta-scroll-window ng-scope ta-text ta-editor form-control" ng-hide="showHtml"><div class="popover fade bottom" style="max-width: none; width: 305px;"><div class="arrow"></div><div class="popover-content"></div></div><div class="ta-resizer-handle-overlay"><div class="ta-resizer-handle-background"></div><div class="ta-resizer-handle-corner ta-resizer-handle-corner-tl"></div><div class="ta-resizer-handle-corner ta-resizer-handle-corner-tr"></div><div class="ta-resizer-handle-corner ta-resizer-handle-corner-bl"></div><div class="ta-resizer-handle-corner ta-resizer-handle-corner-br"></div><div class="ta-resizer-handle-info"></div></div><div id="taTextElement7497331127524376" contenteditable="true" ta-bind="ta-bind" ng-model="html" class="ng-pristine ng-untouched ng-valid ta-bind"><h2>Try me!</h2><p>textAngular is a super cool WYSIWYG Text Editor directive for AngularJS</p><p><b>Features:</b></p><ol><li>Automatic Seamless Two-Way-Binding</li><li>Super Easy <b>Theming</b> Options</li><li>Simple Editor Instance Creation</li><li>Safely Parses Html for Custom Toolbar Icons</li><li>Doesn't Use an iFrame</li><li>Works with Firefox, Chrome, and IE8+</li></ol><p><b>Code at GitHub:</b> <a href="https://github.com/fraywing/textAngular">Here</a> </p></div></div><textarea id="taHtmlElement7497331127524376" ng-show="showHtml" ta-bind="ta-bind" ng-model="html" class="ng-pristine ng-untouched ng-valid ng-scope ta-bind ta-html ta-editor form-control ng-hide"></textarea><input type="hidden" tabindex="-1" style="display: none;" name="wysiswyg-editor" value="&lt;h2&gt;Try me!&lt;/h2&gt;&lt;p&gt;textAngular is a super cool WYSIWYG Text Editor directive for AngularJS&lt;/p&gt;&lt;p&gt;&lt;b&gt;Features:&lt;/b&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Automatic Seamless Two-Way-Binding&lt;/li&gt;&lt;li style=&quot;color: blue;&quot;&gt;Super Easy &lt;b&gt;Theming&lt;/b&gt; Options&lt;/li&gt;&lt;li&gt;Simple Editor Instance Creation&lt;/li&gt;&lt;li&gt;Safely Parses Html for Custom Toolbar Icons&lt;/li&gt;&lt;li&gt;Doesn&amp;apos;t Use an iFrame&lt;/li&gt;&lt;li&gt;Works with Firefox, Chrome, and IE8+&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;b&gt;Code at GitHub:&lt;/b&gt; &lt;a href=&quot;https://github.com/fraywing/textAngular&quot;&gt;Here&lt;/a&gt; &lt;/p&gt;"></div>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Block Note Editor</label>
                  <div class="col-sm-10">
                     <div class="panel">
                        <div class="panel-body">
                           <textarea rows="10" class="form-control block-note"></textarea>
                        </div>
                     </div>
                     <p>With margin</p>
                     <div class="panel">
                        <div class="panel-body">
                           <textarea rows="10" class="form-control block-note block-note-margin"></textarea>
                        </div>
                     </div>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Datepicker</label>
                  <div class="col-sm-10 col-lg-4">
                     <p class="input-group">
                        <input type="text" datepicker-popup="" ng-model="form.dt" is-open="form.opened" min-date="false" max-date="false" datepicker-options="form.dateOptions" date-disabled="form.disabled(form.date, form.mode)" close-text="Close" class="form-control ng-pristine ng-untouched ng-valid ng-isolate-scope ng-valid-date"><ul class="dropdown-menu ng-valid ng-valid-date ng-valid-date-disabled" ng-style="{display: (isOpen &amp;&amp; &#39;block&#39;) || &#39;none&#39;, top: position.top+&#39;px&#39;, left: position.left+&#39;px&#39;}" ng-keydown="keydown($event)" datepicker-popup-wrap="" ng-model="date" ng-change="dateSelection()" style="display: none;">
	<li ng-transclude=""><div ng-switch="datepickerMode" role="application" ng-keydown="keydown($event)" datepicker="" format-year="yy" starting-day="1" min-date="watchData.minDate" max-date="watchData.maxDate" date-disabled="dateDisabled({ date: date, mode: mode })" class="ng-isolate-scope">
  <!-- ngSwitchWhen: day --><table role="grid" aria-labelledby="datepicker-128-3839-title" aria-activedescendant="datepicker-128-3839-27" ng-switch-when="day" tabindex="0" class="">
  <thead>
    <tr>
      <th><button type="button" class="btn btn-default btn-sm pull-left" ng-click="move(-1)" tabindex="-1"><i class="glyphicon glyphicon-chevron-left"></i></button></th>
      <th colspan="6"><button id="datepicker-128-3839-title" role="heading" aria-live="assertive" aria-atomic="true" type="button" class="btn btn-default btn-sm" ng-click="toggleMode()" tabindex="-1" style="width:100%;"><strong class="ng-binding">August 2015</strong></button></th>
      <th><button type="button" class="btn btn-default btn-sm pull-right" ng-click="move(1)" tabindex="-1"><i class="glyphicon glyphicon-chevron-right"></i></button></th>
    </tr>
    <tr>
      <th ng-show="showWeeks" class="text-center"></th>
      <!-- ngRepeat: label in labels track by $index --><th ng-repeat="label in labels track by $index" class="text-center ng-scope"><small aria-label="Monday" class="ng-binding">Mon</small></th><!-- end ngRepeat: label in labels track by $index --><th ng-repeat="label in labels track by $index" class="text-center ng-scope"><small aria-label="Tuesday" class="ng-binding">Tue</small></th><!-- end ngRepeat: label in labels track by $index --><th ng-repeat="label in labels track by $index" class="text-center ng-scope"><small aria-label="Wednesday" class="ng-binding">Wed</small></th><!-- end ngRepeat: label in labels track by $index --><th ng-repeat="label in labels track by $index" class="text-center ng-scope"><small aria-label="Thursday" class="ng-binding">Thu</small></th><!-- end ngRepeat: label in labels track by $index --><th ng-repeat="label in labels track by $index" class="text-center ng-scope"><small aria-label="Friday" class="ng-binding">Fri</small></th><!-- end ngRepeat: label in labels track by $index --><th ng-repeat="label in labels track by $index" class="text-center ng-scope"><small aria-label="Saturday" class="ng-binding">Sat</small></th><!-- end ngRepeat: label in labels track by $index --><th ng-repeat="label in labels track by $index" class="text-center ng-scope"><small aria-label="Sunday" class="ng-binding">Sun</small></th><!-- end ngRepeat: label in labels track by $index -->
    </tr>
  </thead>
  <tbody>
    <!-- ngRepeat: row in rows track by $index --><tr ng-repeat="row in rows track by $index" class="ng-scope">
      <td ng-show="showWeeks" class="text-center h6"><em class="ng-binding">31</em></td>
      <!-- ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-0" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding text-muted">27</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-1" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding text-muted">28</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-2" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding text-muted">29</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-3" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding text-muted">30</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-4" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding text-muted">31</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-5" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">01</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-6" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">02</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date -->
    </tr><!-- end ngRepeat: row in rows track by $index --><tr ng-repeat="row in rows track by $index" class="ng-scope">
      <td ng-show="showWeeks" class="text-center h6"><em class="ng-binding">32</em></td>
      <!-- ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-7" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">03</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-8" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">04</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-9" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">05</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-10" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">06</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-11" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">07</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-12" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">08</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-13" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">09</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date -->
    </tr><!-- end ngRepeat: row in rows track by $index --><tr ng-repeat="row in rows track by $index" class="ng-scope">
      <td ng-show="showWeeks" class="text-center h6"><em class="ng-binding">33</em></td>
      <!-- ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-14" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">10</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-15" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">11</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-16" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">12</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-17" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">13</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-18" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">14</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-19" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">15</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-20" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">16</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date -->
    </tr><!-- end ngRepeat: row in rows track by $index --><tr ng-repeat="row in rows track by $index" class="ng-scope">
      <td ng-show="showWeeks" class="text-center h6"><em class="ng-binding">34</em></td>
      <!-- ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-21" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">17</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-22" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">18</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-23" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">19</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-24" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">20</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-25" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">21</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-26" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">22</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-27" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm btn-info active" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding text-info">23</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date -->
    </tr><!-- end ngRepeat: row in rows track by $index --><tr ng-repeat="row in rows track by $index" class="ng-scope">
      <td ng-show="showWeeks" class="text-center h6"><em class="ng-binding">35</em></td>
      <!-- ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-28" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">24</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-29" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">25</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-30" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">26</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-31" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">27</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-32" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">28</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-33" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">29</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-34" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">30</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date -->
    </tr><!-- end ngRepeat: row in rows track by $index --><tr ng-repeat="row in rows track by $index" class="ng-scope">
      <td ng-show="showWeeks" class="text-center h6"><em class="ng-binding">36</em></td>
      <!-- ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-35" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding">31</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-36" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding text-muted">01</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-37" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding text-muted">02</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-38" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding text-muted">03</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-39" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding text-muted">04</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-40" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding text-muted">05</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date --><td ng-repeat="dt in row track by dt.date" class="text-center ng-scope" role="gridcell" id="datepicker-128-3839-41" aria-disabled="false">
        <button type="button" style="width:100%;" class="btn btn-default btn-sm" ng-class="{&#39;btn-info&#39;: dt.selected, active: isActive(dt)}" ng-click="select(dt.date)" ng-disabled="dt.disabled" tabindex="-1"><span ng-class="{&#39;text-muted&#39;: dt.secondary, &#39;text-info&#39;: dt.current}" class="ng-binding text-muted">06</span></button>
      </td><!-- end ngRepeat: dt in row track by dt.date -->
    </tr><!-- end ngRepeat: row in rows track by $index -->
  </tbody>
</table><!-- end ngSwitchWhen: -->
  <!-- ngSwitchWhen: month -->
  <!-- ngSwitchWhen: year -->
</div></li>
	<!-- ngIf: showButtonBar --><li ng-if="showButtonBar" style="padding:10px 9px 2px" class="ng-scope">
		<span class="btn-group pull-left">
			<button type="button" class="btn btn-sm btn-info ng-binding" ng-click="select(&#39;today&#39;)">Today</button>
			<button type="button" class="btn btn-sm btn-danger ng-binding" ng-click="select(null)">Clear</button>
		</span>
		<button type="button" class="btn btn-sm btn-success pull-right ng-binding" ng-click="close()">Close</button>
	</li><!-- end ngIf: showButtonBar -->
</ul>
                        <span class="input-group-btn">
                           <button type="button" ng-click="form.open($event)" class="btn btn-default">
                              <em class="fa fa-calendar"></em>
                           </button>
                        </span>
                     </p>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Timepicker</label>
                  <div class="col-sm-10">
                     <table ng-model="form.mytime" ng-change="form.changed()" show-meridian="form.ismeridian" class="ng-isolate-scope ng-valid ng-valid-time">
	<tbody>
		<tr class="text-center">
			<td><a ng-click="incrementHours()" class="btn btn-link"><span class="glyphicon glyphicon-chevron-up"></span></a></td>
			<td>&nbsp;</td>
			<td><a ng-click="incrementMinutes()" class="btn btn-link"><span class="glyphicon glyphicon-chevron-up"></span></a></td>
			<td ng-show="showMeridian"></td>
		</tr>
		<tr>
			<td style="width:50px;" class="form-group" ng-class="{&#39;has-error&#39;: invalidHours}">
				<input type="text" ng-model="hours" ng-change="updateHours()" class="form-control text-center ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-mousewheel="incrementHours()" ng-readonly="readonlyInput" maxlength="2">
			</td>
			<td>:</td>
			<td style="width:50px;" class="form-group" ng-class="{&#39;has-error&#39;: invalidMinutes}">
				<input type="text" ng-model="minutes" ng-change="updateMinutes()" class="form-control text-center ng-pristine ng-untouched ng-valid ng-valid-maxlength" ng-readonly="readonlyInput" maxlength="2">
			</td>
			<td ng-show="showMeridian"><button type="button" class="btn btn-default text-center ng-binding" ng-click="toggleMeridian()">PM</button></td>
		</tr>
		<tr class="text-center">
			<td><a ng-click="decrementHours()" class="btn btn-link"><span class="glyphicon glyphicon-chevron-down"></span></a></td>
			<td>&nbsp;</td>
			<td><a ng-click="decrementMinutes()" class="btn btn-link"><span class="glyphicon glyphicon-chevron-down"></span></a></td>
			<td ng-show="showMeridian"></td>
		</tr>
	</tbody>
</table>
                     <p class="ng-binding">Time is: 5:06 PM</p>
                  </div>
               </div>
            </fieldset>
            <fieldset>
               <div class="form-group">
                  <label class="col-sm-2 control-label">UI Mask</label>
                  <div class="col-sm-10">
                     <input type="text" name="masked" ui-mask="(999) 999-9999" ng-model="aa" placeholder="(999) 999-9999" required="" class="form-control mb ng-pristine ng-untouched ng-valid-mask ng-invalid ng-invalid-required">
                     <input type="text" name="masked" ui-mask="(999) 999-9999 ext. 999" ng-model="bb" placeholder="(999) 999-9999 ext. 999" required="" class="form-control mb ng-pristine ng-untouched ng-valid-mask ng-invalid ng-invalid-required">
                     <input type="text" name="masked" ui-mask="**:AAA-999" ng-model="cc" placeholder="**:AAA-999" required="" class="form-control mb ng-pristine ng-untouched ng-valid-mask ng-invalid ng-invalid-required">
                     <p class="m-b">
                        <code>A</code>Any letter.
                        <br>
                        <code>9</code>Any number.
                        <br>
                        <code>*</code>Any letter or number.</p>
                  </div>
               </div>
            </fieldset>
         </form>
      </div>
   </div>
   <!-- END panel-->
</div></div></div></section> <!-- ngInclude: 'templates/footer.html' -->

<?php
    include("footer.php");
?>


</div><!--//--><!-- ngInclude: 'templates/settings.html' -->
<div ng-include="&#39;templates/settings.html&#39;" ng-class="{&#39;visible&#39;: showSettings}" ng-init="showSettings = false" class="settings-wrapper ng-scope"><div class="settings-inner ng-scope">
   <div ng-click="showSettings = !showSettings" class="settings-button">
      <em class="icon-cog"></em>
   </div>
   <div ng-controller="SettingsController as config" class="settings ng-scope">
      <div class="settings-inner">
         <div class="settings-content">
            <div class="pt ph">
               <p class="text-muted">THEMES</p>
               <div class="clearfix mb">
                  <!-- ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="0">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-primary"></li>
                              <li ng-class="theme.topbar" class="bg-primary"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="1">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-purple"></li>
                              <li ng-class="theme.topbar" class="bg-purple"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="2">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-success"></li>
                              <li ng-class="theme.topbar" class="bg-success"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="3">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-warning"></li>
                              <li ng-class="theme.topbar" class="bg-warning"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="4">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-info"></li>
                              <li ng-class="theme.topbar" class="bg-info"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="5">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-danger"></li>
                              <li ng-class="theme.topbar" class="bg-danger"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="6">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-pink"></li>
                              <li ng-class="theme.topbar" class="bg-pink"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes --><div ng-repeat="theme in config.themes" class="pull-left wd-tiny mb ng-scope">
                     <div class="setting-color">
                        <label>
                           <input type="radio" name="setting-theme" ng-model="app.themeId" ng-value="$index" ng-change="config.setTheme($index)" class="ng-pristine ng-untouched ng-valid" value="7">
                           <span class="icon-check"></span>
                           <ul class="list-table">
                              <li ng-class="theme.sidebar" class="bg-white"></li>
                              <li ng-class="theme.brand" class="bg-amber"></li>
                              <li ng-class="theme.topbar" class="bg-amber"></li>
                           </ul>
                        </label>
                     </div>
                  </div><!-- end ngRepeat: theme in config.themes -->
               </div>
            </div>
            <hr>
            <div class="p">
               <p class="text-muted">LAYOUT</p>
               <div class="clearfix">
                  <p class="pull-left">Fixed</p>
                  <div class="pull-right">
                     <label class="switch switch-info">
                        <input type="checkbox" ng-model="app.layout.isFixed" ng-disabled="app.layout.isMaterial" class="ng-pristine ng-untouched ng-valid">
                        <span></span>
                     </label>
                  </div>
               </div>
               <div class="clearfix">
                  <p class="pull-left">Boxed</p>
                  <div class="pull-right">
                     <label class="switch switch-info">
                        <input type="checkbox" ng-model="app.layout.isBoxed" ng-disabled="app.layout.isMaterial" class="ng-pristine ng-untouched ng-valid">
                        <span></span>
                     </label>
                  </div>
               </div>
               <div class="clearfix">
                  <p class="pull-left">Material</p>
                  <div class="pull-right">
                     <label ng-click="app.layout.isBoxed = false; app.layout.isFixed = true" class="switch switch-info">
                        <input type="checkbox" ng-model="app.layout.isMaterial" ng-disabled="app.layout.isDocked || app.sidebar.isMini" class="ng-pristine ng-untouched ng-valid">
                        <span></span>
                     </label>
                  </div>
               </div>
            </div>
            <div class="p">
               <p class="text-muted">SIDEBAR</p>
               <div class="clearfix">
                  <p class="pull-left">Mini</p>
                  <div class="pull-right">
                     <label ng-click="app.layout.isMaterial = false;" class="switch switch-info">
                        <input type="checkbox" ng-model="app.sidebar.isMini" class="ng-pristine ng-untouched ng-valid">
                        <span></span>
                     </label>
                  </div>
               </div>
            </div>
            <div class="p">
               <p class="text-muted">FOOTER</p>
               <div class="clearfix">
                  <p class="pull-left">Hidden</p>
                  <div class="pull-right">
                     <label class="switch switch-info">
                        <input type="checkbox" ng-model="app.footer.hidden" class="ng-pristine ng-untouched ng-valid">
                        <span></span>
                     </label>
                  </div>
               </div>
            </div>
            <hr>
            <div class="p">
               <!-- START Language list-->
               <div class="pull-right">
                  <div dropdown="" is-open="language.listIsOpen" class="btn-group btn-group-sm"><a dropdown-toggle="" class="dropdown-toggle clickable ng-binding" aria-haspopup="true" aria-expanded="false">English<span class="caret"></span></a>
                     <ul role="menu" class="dropdown-menu dropdown-menu-right animated fadeInLeft2">
                        <!-- ngRepeat: (localeId, langName) in language.available --><li ng-repeat="(localeId, langName) in language.available" class="ng-scope"><a ng-click="language.set(localeId, $event)" href="" class="ng-binding">English</a>
                        </li><!-- end ngRepeat: (localeId, langName) in language.available --><li ng-repeat="(localeId, langName) in language.available" class="ng-scope"><a ng-click="language.set(localeId, $event)" href="" class="ng-binding">Español</a>
                        </li><!-- end ngRepeat: (localeId, langName) in language.available --><li ng-repeat="(localeId, langName) in language.available" class="ng-scope"><a ng-click="language.set(localeId, $event)" href="" class="ng-binding">Português</a>
                        </li><!-- end ngRepeat: (localeId, langName) in language.available --><li ng-repeat="(localeId, langName) in language.available" class="ng-scope"><a ng-click="language.set(localeId, $event)" href="" class="ng-binding">中国简体</a>
                        </li><!-- end ngRepeat: (localeId, langName) in language.available -->
                     </ul>
                  </div>
               </div>
               <!-- END Language list    -->
               <p class="text-muted">LANGUAGE</p>
            </div>
         </div>
      </div>
   </div>
</div></div>
<div class="layer-morph-overlay"><div class="layer-morph-inner bg-info"></div></div>
<div layer-morph-close="" class="layer-morph-close"><em class="icon-cross"></em></div>
<div class="layer-morph-container bg-info"><div class="layer-morph-wrapper"><!-- ngInclude: 'templates/layer-search.html' --><div id="layer-search" ng-include="&#39;templates/layer-search.html&#39;" class="layer-morph ng-scope"><form action="" class="ng-pristine ng-valid ng-scope">
   <p class="help-block">Type and hit enter to search</p>
   <input type="text" placeholder="I&#39;m looking for..." ng-model="searchTerm" class="form-control input-huge ng-pristine ng-untouched ng-valid">
   <button type="submit" class="hidden">Search</button>
</form>
<div class="row ng-scope">
   <div class="col-md-4 col-sm-6 pv">
      <h4 class="text-bold pv-lg">People (4)</h4>
      <br>
      <ul class="list-unstyled">
         <!-- START User-->
         <li class="media">
            <div class="media-left media-middle">
               <!-- Contact avatar-->
               <div class="point-pin">
                  <a href="">
                     <img src="./images/05.jpg" alt="Image" class="media-object img-circle thumb40">
                  </a>
                  <div class="point point-success point-lg"></div>
               </div>
            </div>
            <!-- Contact info-->
            <div class="media-body">
               <div class="media-heading"><a href="" class="text-md">Marc Fuller</a>
               </div>
            </div>
         </li>
         <!-- END User-->
         <!-- START User-->
         <li>
            <hr>
         </li>
         <li class="media">
            <div class="media-left media-middle">
               <!-- Contact avatar-->
               <div class="point-pin">
                  <a href="">
                     <img src="./images/06.jpg" alt="Image" class="media-object img-circle thumb40">
                  </a>
                  <div class="point point-success point-lg"></div>
               </div>
            </div>
            <!-- Contact info-->
            <div class="media-body">
               <div class="media-heading"><a href="" class="text-md">Wade Wade</a>
               </div>
            </div>
         </li>
         <!-- END User-->
         <!-- START User-->
         <li>
            <hr>
         </li>
         <li class="media">
            <div class="media-left media-middle">
               <!-- Contact avatar-->
               <div class="point-pin">
                  <a href="">
                     <img src="./images/07.jpg" alt="Image" class="media-object img-circle thumb40">
                  </a>
                  <div class="point point-danger point-lg"></div>
               </div>
            </div>
            <!-- Contact info-->
            <div class="media-body">
               <div class="media-heading"><a href="" class="text-md">Alan Boyd</a>
               </div>
            </div>
         </li>
         <!-- END User-->
         <!-- START User-->
         <li>
            <hr>
         </li>
         <li class="media">
            <div class="media-left media-middle">
               <!-- Contact avatar-->
               <div class="point-pin">
                  <a href="">
                     <img src="./images/01.jpg" alt="Image" class="media-object img-circle thumb40">
                  </a>
                  <div class="point point-danger point-lg"></div>
               </div>
            </div>
            <!-- Contact info-->
            <div class="media-body">
               <div class="media-heading"><a href="" class="text-md">Ryan Carr</a>
               </div>
            </div>
         </li>
         <!-- END User-->
      </ul>
   </div>
   <div class="col-md-4 col-sm-6 pv">
      <h4 class="text-bold pv-lg">Pages (3)</h4>
      <br>
      <ul class="list-unstyled">
         <li class="media">
            <div class="media-left media-middle">
               <div class="thumb40 bg-success circle text-center text-bold">D</div>
            </div>
            <div class="media-body">
               <div class="media-heading clearfix"><a ui-sref="app.dashboard" layer-morph-close="" class="pull-left text-md" href="http://geedmo.com/themes/naut/v1.2/angularjs/#/app/dashboard">Dashboard</a>
                  <small class="text-muted pull-right mt">3 matches</small>
               </div>
            </div>
         </li>
         <li>
            <hr>
         </li>
         <li class="media">
            <div class="media-left media-middle">
               <div class="thumb40 bg-purple circle text-center text-bold">P</div>
            </div>
            <div class="media-body">
               <div class="media-heading clearfix"><a ui-sref="app.extras.profile" layer-morph-close="" class="pull-left text-md" href="http://geedmo.com/themes/naut/v1.2/angularjs/#/app/extras/profile">Profile</a>
                  <small class="text-muted pull-right mt">3 matches</small>
               </div>
            </div>
         </li>
         <li>
            <hr>
         </li>
         <li class="media">
            <div class="media-left media-middle">
               <div class="thumb40 bg-danger circle text-center text-bold">P</div>
            </div>
            <div class="media-body">
               <div class="media-heading clearfix"><a ui-sref="app.extras.projects" layer-morph-close="" class="pull-left text-md" href="http://geedmo.com/themes/naut/v1.2/angularjs/#/app/extras/projects">Projects</a>
                  <small class="text-muted pull-right mt">2 match(es)</small>
               </div>
            </div>
         </li>
      </ul>
   </div>
</div></div><div class="layer-morph-footer">Naut</div></div></div>
<!--<script src="./js/vendor-669d84b7.js"></script> 
<script src="./js/application-0c8ca458.js"></script> 
<script src="./js/scrap.js" type="text/javascript"></script>
<script src="./js/ads.js" type="text/javascript"></script>
<script src="./js/jquery.js" type="text/javascript"></script>
<script src="./js/essence.js" type="text/javascript"></script>-->
<div id="flotTip" style="display: none; position: absolute; background-color: rgb(255, 255, 255); z-index: 1040; padding: 0.4em 0.6em; border-top-left-radius: 0.5em; border-top-right-radius: 0.5em; border-bottom-right-radius: 0.5em; border-bottom-left-radius: 0.5em; font-size: 0.8em; border: 1px solid rgb(17, 17, 17); white-space: nowrap; background-position: initial initial; background-repeat: initial initial;"></div><input id="textAngular-editableFix-010203040506070809" class="ta-hidden-input" unselectable="on" tabindex="-1"></body></html>