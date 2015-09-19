<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Unleashed
 * Date: 9/18/13
 * Time: 2:55 AM
 */
?>

<div class="row">
    <div class="col-md-6">
    <!-- START DEFAULT FORM ELEMENTS -->
    <div class="block">
        <h4>Default From Inputs</h4>
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-md-2 control-label">Text</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" value="Some text value..."/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Password</label>
                <div class="col-md-10">
                    <input type="password" class="form-control" value="password"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Readonly</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" readonly value="Readonly value"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Disabled</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" readonly value="Disabled value"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Placeholder</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="Fill this field please"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Text area</label>
                <div class="col-md-10">
                    <textarea class="form-control" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Label</label>
                <div class="col-md-10">
                    <p class="form-control-static">Static form control</p>
                </div>
            </div>
        </form>
    </div>
    <!-- END DEFAULT FORM ELEMENTS -->

    <!-- START CHECKBOXES RADIO AND SELECT -->
    <div class="block">
        <h4>Checkbox, Radio and Select</h4>
        <form role="form">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value=""/>
                    Option one is this and that&mdash;be sure to include why it's great
                </label>
            </div>
            <div class="checkbox disabled">
                <label>
                    <input type="checkbox" value="" disabled/>
                    Option two is disabled
                </label>
            </div>

            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked/>
                    Option one is this and that&mdash;be sure to include why it's great
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>
                    Option two can be something else and selecting it will deselect option one
                </label>
            </div>
            <div class="radio disabled">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled/>
                    Option three is disabled
                </label>
            </div>
        </form>
    </div>
    <!-- END OF CHECKBOXES RADIO AND SELECT -->

    <!-- FILE INPUT -->
    <div class="block">
        <h4>Input File</h4>
        <form role="form" class="form-horizontal">
            <div class="form-group">
                <label class="col-md-2 control-label">Default</label>
                <div class="col-md-10">
                    <input type="file"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Styled</label>
                <div class="col-md-10">
                    <input type="file" class="fileinput" name="filename1" id="filename1"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label"></label>
                <div class="col-md-10">
                    <input type="file" class="fileinput btn-success" name="filename2" id="filename2" title="Custom text and background"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label"></label>
                <div class="col-md-10">
                    <input type="file" class="fileinput btn-danger" name="filename3" id="filename3" data-filename-placement="inside" title="File name goes inside"/>
                </div>
            </div>
        </form>
    </div>
    <!-- END FILE INPUT -->

    <!-- START FORM GROUP ELEMENTS -->
    <div class="block">
        <h4>Form Groups</h4>
        <form role="form" class="form-horizontal">
            <div class="form-group">
                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="text" class="form-control" placeholder="Left side addon"/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Right side addon"/>
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="text" class="form-control" placeholder="Both side addons"/>
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>
            </div>

            <h5 class="push-up-20">Sizing</h5>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">@</span>
                        <input type="text" class="form-control" placeholder="Large"/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="text" class="form-control" placeholder="Default"/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">@</span>
                        <input type="text" class="form-control" placeholder="Small"/>
                    </div>
                </div>
            </div>

            <h5 class="push-up-20">Checkbox and radio addons</h5>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="checkbox"/>
                                                    </span>
                        <input type="text" class="form-control" placeholder="Checkbox addon"/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="radio"/>
                                                    </span>
                        <input type="text" class="form-control" placeholder="Radio addon"/>
                    </div>
                </div>
            </div>

            <h5 class="push-up-20">Button addons</h5>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button">Go!</button>
                                                    </span>
                        <input type="text" class="form-control" placeholder="Left side button addon"/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Right side button addon"/>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button">Go!</button>
                                                    </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button">Left</button>
                                                    </span>
                        <input type="text" class="form-control" placeholder="Both side button addon"/>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button">Right</button>
                                                    </span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- END FORM GROUP ELEMENTS -->

    </div>
    <div class="col-md-6">

    <div class="block">
        <h4>Styled Checkbox And Radio</h4>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="check"><input type="checkbox" class="icheckbox"/> Default</label>
                    </div>
                    <div class="col-md-4">
                        <label class="check"><input type="checkbox" class="icheckbox" checked="checked"/> Checked</label>
                    </div>
                    <div class="col-md-4">
                        <label class="check"><input type="checkbox" class="icheckbox" disabled/> Disabled</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="check"><input type="radio" class="iradio" name="iradio"/> Default</label>
                    </div>
                    <div class="col-md-4">
                        <label class="check"><input type="radio" class="iradio" name="iradio" checked="checked"/> Checked</label>
                    </div>
                    <div class="col-md-4">
                        <label class="check"><input type="radio" class="iradio" name="iradio" disabled/> Disabled</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- START TAGSINPUT -->
    <div class="block">
        <h4>Tags Input</h4>
        <form role="form" class="form-horizontal">
            <div class="form-group">
                <div class="col-md-12">
                    <input type="text" class="tagsinput" value="First,Second,Third"/>
                </div>
            </div>
        </form>
    </div>
    <!-- END OF TAGSINPUT -->

    <!-- START CHECKBOXES RADIO AND SELECT -->
    <div class="block">
        <h4>Bootstrap Select</h4>
        <form role="form" class="form-horizontal">
            <div class="form-group">
                <label class="col-md-3 control-label">Default</label>
                <div class="col-md-9">
                    <select class="form-control select">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Multiple</label>
                <div class="col-md-9">
                    <select multiple class="form-control select">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                    </select>
                </div>
            </div>
            <h5 class="push-up-20">Custom features</h5>
            <div class="form-group">
                <label class="col-md-3 control-label">Styled</label>
                <div class="col-md-9">
                    <select class="form-control select" data-style="btn-success">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Search</label>
                <div class="col-md-9">
                    <select class="form-control select" data-live-search="true">
                        <option>Lorem ipsum dolor</option>
                        <option>Sit amet sicors</option>
                        <option>Mostoly stofu tiro</option>
                        <option>Vico sante fara</option>
                        <option>Delomo ponto si</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    <!-- END OF CHECKBOXES RADIO AND SELECT -->

    <!-- START DATE AND TIME PICKER -->
    <div class="block">
        <h4>Date and time pickers</h4>
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-md-3 control-label">Default</label>
                <div class="col-md-5">
                    <input type="text" class="form-control datepicker" value="2014-08-04">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">As component</label>
                <div class="col-md-5">
                    <div class="input-group date" id="dp-2" data-date="05-07-2014" data-date-format="dd-mm-yyyy">
                        <input type="text" class="form-control" value="05-07-2014" disabled="disabled"/>
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Start with year</label>
                <div class="col-md-5">
                    <div class="input-group">
                        <input type="text" id="dp-3" class="form-control" value="06-06-2014" data-date="06-06-2014" data-date-format="dd-mm-yyyy" data-date-viewmode="years"/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Start with months</label>
                <div class="col-md-5">
                    <div class="input-group" >
                        <input type="text" class="form-control" value="07-07-2014" id="dp-4" data-date="07-07-2014" data-date-format="dd-mm-yyyy" data-date-viewmode="months"/>
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>

            <h5 class="push-up-20">Timepickers</h5>
            <div class="form-group">
                <label class="col-md-3 control-label">Default</label>
                <div class="col-md-5">
                    <div class="input-group bootstrap-timepicker">
                        <input type="text" class="form-control timepicker"/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">24 hour mode</label>
                <div class="col-md-5">
                    <div class="input-group bootstrap-timepicker">
                        <input type="text" class="form-control timepicker24"/>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- END DATE AND TIME PICKER -->

    <!-- START COLORPICKER -->
    <div class="block">
        <h4>Colorpickers</h4>
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-md-3 control-label">Default</label>
                <div class="col-md-5">
                    <input type="text" class="form-control colorpicker" value="#FF4400">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">RGBA mode</label>
                <div class="col-md-5">
                    <input type="text" class="form-control colorpicker_rgba" value="rgba(0,0,0,0.25)" data-color-format="rgba"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">As component</label>
                <div class="col-md-5">
                    <div class="input-group color" data-color="rgb(255, 146, 180)" data-color-format="rgb" id="colorpicker">
                        <input type="text" class="form-control" readonly/>
                        <span class="input-group-addon"><i style="background-color: rgb(255, 146, 180)"></i></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- END COLORPICKER -->

    <!-- START VERTICAL FORM SAMPLE -->
    <div class="block">
        <h4>Vertical Form Sample</h4>
        <form role="form">
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control"/>
            </div>
            <div class="checkbox pull-left">
                <label><input type="checkbox"> Check me out</label>
            </div>
        </form>
    </div>
    <!-- END VERTICAL FORM SAMPLE -->

    <!-- START INLINE FORM SAMPLE -->
    <div class="block">
        <h4>Inline Form Sample</h4>
        <form class="form-inline" role="form">
            <div class="form-group">
                <label class="sr-only">Login</label>
                <input type="text" class="form-control" placeholder="Your login"/>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <label class="sr-only">Password</label>
                    <input class="form-control" type="password" placeholder="Your password"/>
                </div>
            </div>
            <button type="submit" class="btn btn-danger">Sign in</button>
        </form>
    </div>
    <!-- END INLINE FORM SAMPLE -->

    <!-- START HORIZONTAL FORM SAMPLE -->
    <div class="block">
        <h4>Horizontal Form</h4>
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-md-10">
                    <p class="form-control-static">email@example.com</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-md-10">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Text area</label>
                <div class="col-md-10">
                    <textarea class="form-control"></textarea>
                </div>
            </div>
        </form>
    </div>
    <!-- END HORIZONTAL FORM SAMPLE -->
    </div>

    <div class="col-md-12">

        <!-- START FORM VALIDATION STATES -->
        <div class="block">
            <h4>Form Validation States</h4>
            <div class="col-md-6">
                <div class="form-group has-success">
                    <label class="control-label">Input with success</label>
                    <input type="text" class="form-control"/>
                </div>
                <div class="form-group has-warning">
                    <label class="control-label">Input with warning</label>
                    <input type="text" class="form-control"/>
                </div>
                <div class="form-group has-error">
                    <label class="control-label">Input with error</label>
                    <input type="text" class="form-control"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group has-success has-feedback">
                    <label class="control-label">Input with success</label>
                    <input type="text" class="form-control"/>
                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                </div>
                <div class="form-group has-warning has-feedback">
                    <label class="control-label">Input with warning</label>
                    <input type="text" class="form-control"/>
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                </div>
                <div class="form-group has-error has-feedback">
                    <label class="control-label">Input with error</label>
                    <input type="text" class="form-control"/>
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                </div>
            </div>
        </div>
        <!-- END FORM VALIDATION STATES -->

    </div>

    <div class="col-md-12">

        <!-- START FORM GRID -->
        <div class="block">
            <h4>Form Grid</h4>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" placeholder=".col-md-12" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8">
                        <input type="text" placeholder=".col-md-8" class="form-control"/>
                    </div>
                    <div class="col-md-4">
                        <input type="text" placeholder=".col-md-4" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <input type="text" placeholder=".col-md-6" class="form-control"/>
                    </div>
                    <div class="col-md-3">
                        <input type="text" placeholder=".col-md-3" class="form-control"/>
                    </div>
                    <div class="col-md-3">
                        <input type="text" placeholder=".col-md-3" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <input type="text" placeholder=".col-md-4" class="form-control"/>
                    </div>
                    <div class="col-md-4">
                        <input type="text" placeholder=".col-md-4" class="form-control"/>
                    </div>
                    <div class="col-md-4">
                        <input type="text" placeholder=".col-md-4" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-2">
                        <input type="text" placeholder=".col-md-2" class="form-control"/>
                    </div>
                    <div class="col-md-5">
                        <input type="text" placeholder=".col-md-5" class="form-control"/>
                    </div>
                    <div class="col-md-5">
                        <input type="text" placeholder=".col-md-5" class="form-control"/>
                    </div>
                </div>
            </form>
        </div>
        <!-- END HORIZONTAL FORM SAMPLE -->

    </div>

</div>