
@extends('layout.mainlayout')
@section('content')
  <div id="main">

    <article class="post">
        <header>
		    <div class="title">
			<h2>ODF: {{$panelID}}</h2>

            <p><h4>Port Type: {{$port_type}}</h4></p>
            <a href="{{ url()->previous() }}" align="right" class="button">Back</a><br/>
            </div>
        </header>

            <h3><strong>Terminal 1</strong></h3>
            <br/>
            <label>Port 1:</label>
            <form method="GET" action="fibreport_panel_search">
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="1">Fibre 1</option>
                    <option value="2">Fibre 2</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 2:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="3">Fibre 3</option>
                    <option value="4">Fibre 4</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 3:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="5">Fibre 5</option>
                    <option value="6">Fibre 6</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 4:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="7">Fibre 7</option>
                    <option value="8">Fibre 8</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            </form>
            </br>
            <h3><strong>Terminal 2</strong></h3>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 5:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="9">Fibre 9</option>
                    <option value="10">Fibre 10</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 6:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="11">Fibre 11</option>
                    <option value="12">Fibre 12</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 7:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="13">Fibre 13</option>
                    <option value="14">Fibre 14</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 8:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="15">Fibre 15</option>
                    <option value="16">Fibre 16</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            </form>
            <br/>

            <h3><strong>Terminal 3</strong></h3>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 9:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="17">Fibre 17</option>
                    <option value="18">Fibre 18</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 10:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="19">Fibre 19</option>
                    <option value="20">Fibre 20</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 11:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="21">Fibre 21</option>
                    <option value="22">Fibre 22</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
           <form method="GET" action="fibreport_panel_search">
            <label>Port 12:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="23">Fibre 23</option>
                    <option value="24">Fibre 24</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>

            <h3><strong>Terminal 4</strong></h3>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 13:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="25">Fibre 25</option>
                    <option value="26">Fibre 26</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 14:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="27">Fibre 27</option>
                    <option value="28">Fibre 28</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 15:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="29">Fibre 29</option>
                    <option value="30">Fibre 30</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
           <form method="GET" action="fibreport_panel_search">
            <label>Port 16:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="31">Fibre 31</option>
                    <option value="32">Fibre 32</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>

            <h3><strong>Terminal 5</strong></h3>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 17:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="33">Fibre 33</option>
                    <option value="34">Fibre 34</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 18:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="35">Fibre 35</option>
                    <option value="36">Fibre 36</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 19:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="37">Fibre 37</option>
                    <option value="38">Fibre 38</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 20:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="39">Fibre 39</option>
                    <option value="40">Fibre 40</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>

            <h3><strong>Terminal 6</strong></h3>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 21:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="41">Fibre 41</option>
                    <option value="42">Fibre 42</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 22:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="43">Fibre 43</option>
                    <option value="44">Fibre 44</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 23:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="45">Fibre 45</option>
                    <option value="46">Fibre 46</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 24:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="47">Fibre 47</option>
                    <option value="48">Fibre 48</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            </form>
            <br/>

         </article>
    </div>
@endsection
