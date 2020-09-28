
@extends('layout.mainlayout')
@section('content')
   <div id="main">

    <article class="post">
        <header>
		    <div class="title">
			    <h2>ODF: {{$panelID}}</h2>

            <h4>Port Type: {{$port_type}}</h4>
            <a href="{{ url()->previous() }}" align="right" class="button">Back</a><br/>
            </div>
        </header>

            <h3><strong>Terminal 1</strong></h3>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 1:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="1">Fibre 1</option>
                    <option value="2">Fibre 2</option>
                    <option value="3">Fibre 3</option>
                    <option value="4">Fibre 4</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 2:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="5">Fibre 5</option>
                    <option value="6">Fibre 6</option>
                    <option value="7">Fibre 7</option>
                    <option value="8">Fibre 8</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 3:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="9">Fibre 9</option>
                    <option value="10">Fibre 10</option>
                    <option value="11">Fibre 11</option>
                    <option value="12">Fibre 12</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 4:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="13">Fibre 13</option>
                    <option value="14">Fibre 14</option>
                    <option value="15">Fibre 15</option>
                    <option value="16">Fibre 16</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <h3><strong>Terminal 2</strong></h3>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 5:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="17">Fibre 17</option>
                    <option value="18">Fibre 18</option>
                    <option value="19">Fibre 19</option>
                    <option value="20">Fibre 20</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 6:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="21">Fibre 21</option>
                    <option value="22">Fibre 22</option>
                    <option value="23">Fibre 23</option>
                    <option value="24">Fibre 24</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 7:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="25">Fibre 25</option>
                    <option value="26">Fibre 26</option>
                    <option value="27">Fibre 27</option>
                    <option value="28">Fibre 28</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 8:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="29">Fibre 29</option>
                    <option value="30">Fibre 30</option>
                    <option value="31">Fibre 31</option>
                    <option value="32">Fibre 32</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
             <h3><strong>Terminal 3</strong></h3>
             <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 9:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="33">Fibre 33</option>
                    <option value="34">Fibre 34</option>
                    <option value="35">Fibre 35</option>
                    <option value="36">Fibre 36</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 10:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="37">Fibre 37</option>
                    <option value="38">Fibre 38</option>
                    <option value="39">Fibre 39</option>
                    <option value="40">Fibre 40</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 11:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="41">Fibre 41</option>
                    <option value="42">Fibre 42</option>
                    <option value="43">Fibre 43</option>
                    <option value="44">Fibre 44</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 12:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="45">Fibre 45</option>
                    <option value="46">Fibre 46</option>
                    <option value="47">Fibre 47</option>
                    <option value="48">Fibre 48</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
             <h3><strong>Terminal 4</strong></h3>
             <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 13:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="49">Fibre 49</option>
                    <option value="50">Fibre 50</option>
                    <option value="51">Fibre 51</option>
                    <option value="52">Fibre 52</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 14:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="53">Fibre 53</option>
                    <option value="54">Fibre 54</option>
                    <option value="55">Fibre 55</option>
                    <option value="56">Fibre 56</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 15:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px"
                    <option value="57">Fibre 57</option>
                    <option value="58">Fibre 58</option>
                    <option value="59">Fibre 59</option>
                    <option value="60">Fibre 60</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
           <form method="GET" action="fibreport_panel_search">
            <label>Port 16:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="61">Fibre 61</option>
                    <option value="62">Fibre 62</option>
                    <option value="63">Fibre 63</option>
                    <option value="64">Fibre 64</option>
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
                    <option value="65">Fibre 65</option>
                    <option value="66">Fibre 66</option>
                    <option value="67">Fibre 67</option>
                    <option value="68">Fibre 68</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 18:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="69">Fibre 69</option>
                    <option value="70">Fibre 70</option>
                    <option value="71">Fibre 71</option>
                    <option value="72">Fibre 72</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 19:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="73">Fibre 73</option>
                    <option value="74">Fibre 74</option>
                    <option value="75">Fibre 75</option>
                    <option value="76">Fibre 76</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 20:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="77">Fibre 77</option>
                    <option value="78">Fibre 78</option>
                    <option value="79">Fibre 79</option>
                    <option value="80">Fibre 80</option>
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
                    <option value="81">Fibre 81</option>
                    <option value="82">Fibre 82</option>
                    <option value="83">Fibre 83</option>
                    <option value="84">Fibre 84</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 22:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="85">Fibre 85</option>
                    <option value="86">Fibre 86</option>
                    <option value="87">Fibre 87</option>
                    <option value="88">Fibre 88</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
            <form method="GET" action="fibreport_panel_search">
            <label>Port 23:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="89">Fibre 89</option>
                    <option value="90">Fibre 90</option>
                    <option value="91">Fibre 91</option>
                    <option value="92">Fibre 92</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
           <form method="GET" action="fibreport_panel_search">
            <label>Port 24:</label>
			<select name="fibre_num" id="fibre" class="form-control" style="width:250px">
                    <option value="93">Fibre 93</option>
                    <option value="94">Fibre 94</option>
                    <option value="95">Fibre 95</option>
                    <option value="96">Fibre 96</option>
            </select>
            <br/>
            <button type="fibreport_panel_search/">Click Here</button>
            <br/>
            </form>
            <br/>
       </article>
    </div>

@endsection
