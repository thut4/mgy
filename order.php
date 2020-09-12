<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="show.css">
    <script src="another.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-3">
            <div class="col-9">
                <h3 class="text-primary text-center">Delivery</h3>
                <div class="card">
                    <form action="store.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name *" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="phone" name="phone" class="form-control" placeholder="Phone *" pattern="^[0-9]*$">
                        </div>
                        <div class="form-group">
                            <label for="ward">Ward</label>
                            <!--<input list="ward-address" id="address" name="ward" class="form-control" placeholder="Choose Ward">-->
                            <select id="ward-address" name="ward" class="form-control form-control-sm" required>
                                <option selected disabled>--Select Ward--</option>
                                <option value="ဗိုလ်ချူပ်လမ်း">ဗိုလ်ချူပ်လမ်း</option>
                                <option value="နတ်မောက်လမ်း">နတ်မောက်လမ်း</option>
                                <option value="ခွာညိုလမ်း">ခွာညိုလမ်း</option>
                                <option value="ပြည်တော်သာလမ်း">ပြည်တော်သာလမ်း</option>
                                <option value="သစ္စာလမ်း">သစ္စာလမ်း</option>
                                <option value="မဲထီးလမ်း">မဲထီးလမ်း</option>
                                <option value="မေတ္တာလမ်း">မေတ္တာလမ်း</option>
                                <option value="အထက၁လမ်း">အထက၁လမ်း</option>
                                <option value="တောင်တွင်းလမ်း">တောင်တွင်းလမ်း</option>
                                <option value="အဝေရာလမ်း">အဝေရာလမ်း</option>
                                <option value="မြို့ပတ်လမ်း">မြို့ပတ်လမ်း</option>
                                <option value="ဈေးလယ်စိုး">ဈေးလယ်စိုး</option>
                                <option value="ဆားစည့်ရပ်">ဆားစည့်ရပ်</option>
                                <option value="ရွာသစ်ပွဲကြို">ရွာသစ်ပွဲကြို</option>
                                <option value="ပြည်တော်သာ">ပြည်တော်သာ</option>
                                <option value="ကန်သာ A">ကန်သာ A</option>
                                <option value="ကန်သာ B">ကန်သာ B</option>
                                <option value="ကန်သာ C">ကန်သာ C</option>
                                <option value="ကန်သာ D">ကန်သာ D</option>
                                <option value="မြို့မအိုးဘို">မြို့မအိုးဘို</option>
                                <option value="ရွှေညောင်ရပ်">ရွှေညောင်ရပ်</option>
                                <option value="ကင်းရပ်">ကင်းရပ်</option>
                                <option value="စိုးကောမင်း">စိုးကောမင်း</option>
                                <option value="ဆုံရပ်">ဆုံရပ်</option>
                                <option value="မြို့ဟောင်း">မြို့ဟောင်း</option>
                                <option value="သိင်္ဂါဂီရိ">သိင်္ဂါဂီရိ</option>
                                <option value="မြင်သာ">မြင်သာ</option>
                                <option value="အောင်စေတနာ A">အောင်စေတနာ A</option>
                                <option value="အောင်စေတနာ B">အောင်စေတနာ B</option>
                                <option value="အောင်စေတနာ C">အောင်စေတနာ C</option>
                                <option value="အောင်စေတနာ D">အောင်စေတနာ D</option>
                                <option value="ရန်မျိူးနိုင်">ရန်မျိူးနိုင်</option>
                                <option value="ရန်မျိူးလုံ">ရန်မျိူးလုံ</option>
                                <option value="ရန်မျိူးအောင်">ရန်မျိူးအောင်</option>
                                <option value="ရန်ကင်း">ရန်ကင်း</option>
                                <option value="ရန်နိုင်">ရန်နိုင်</option>
                                <option value="ရန်ပယ်">ရန်ပယ်</option>
                                <option value="ရန်ကျော်">ရန်ကျော်</option>
                                <option value="ရန်အောင်">ရန်အောင်</option>
                                <option value="ပညာရေးကောလိပ်">ပညာရေးကောလိပ်</option>
                                <option value="ကွန်ပျူတာတက္ကသိုလ်">ကွန်ပျူတာတက္ကသိုလ်</option>
                                <option value="ဆေးတက္ကသိုလ်">ဆေးတက္ကသိုလ်</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Street</label>
                            <!--<input list="street-name" id="street" name="street" class="form-control" placeholder="Choose Street">-->
                            <select id="street-name" name="street" class="form-control form-control-sm">
                                <option selected disabled>--Select Street--</option>
                                <option value="၁လမ်း">၁လမ်း</option>
                                <option value="၂လမ်း">၂လမ်း</option>
                                <option value="၃လမ်း">၃လမ်း</option>
                                <option value="၄လမ်း">၄လမ်း</option>
                                <option value="၅လမ်း">၅လမ်း</option>
                                <option value="၆လမ်း">၆လမ်း</option>
                                <option value="၇လမ်း">၇လမ်း</option>
                                <option value="၈လမ်း">၈လမ်း</option>
                                <option value="9လမ်း">၉လမ်း</option>
                                <option value="၁၀လမ်း">၁၀လမ်း</option>
                                <option value="၁၁လမ်း">၁၁လမ်း</option>
                                <option value="၁၂လမ်း">၁၂လမ်း</option>
                                <option value="၁၃လမ်း">၁၃လမ်း</option>
                                <option value="၁၄လမ်း">၁၄လမ်း</option>
                                <option value="၁၅လမ်း">၁၅လမ်း</option>
                                <option value="၁၆လမ်း">၁၆လမ်း</option>
                                <option value="၁၇လမ်း">၁၇လမ်း</option>
                                <option value="၁၈လမ်း">၁၈လမ်း</option>
                                <option value="၁၉လမ်း">၁၉လမ်း</option>
                                <option value="၂၀လမ်း">၂၀လမ်း</option>
                                <option value="၂၁လမ်း">၂၁လမ်း</option>
                                <option value="၂၂လမ်း">၂၂လမ်း</option>
                                <option value="၂၃လမ်း">၂၃လမ်း</option>
                                <option value="၂၄လမ်း">၂၄လမ်း</option>
                                <option value="၂၅လမ်း">၂၅လမ်း</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="res">Select Restaurants</label>
                            <select name="rest" id="rest" class="form-control" onchange="configureDropDownLists(this,document.getElementById('menu'))" required>
                                <option selected="">Select Restaurant</option>
                                <option value="Thu">Thu's Tasty</option>
                                <option value="Nyein">Nyein</option>
                                <option value="Immortal">Immortal</option>
                                <option value="HighClass">HighClass</option>
                                <option value="MiSo">Mi-So Cafe</option>
                                <option value="YoeShin">YoeShin Cafe</option>
                                <option value="canteen">UCSMGY Canteen</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="menu[]" id="menu" class="form-control form-control-sm" multiple="multiple">
                                <option selected="">Choose Menu</option>
                            </select>
                        </div>
                        <div class="form--group">
                            <label for="amount">Quantity</label>
                            <input type="number" name="quantity" min="0" max="10" class="form-control mb-3">
                        </div>
                        <!-- <div class="form-group">
                        <label for="restaurants">Restaurants&amp;Menu</label>
                        <select name="foods[]" class="form-control" id="menu" multiple>
                            <option value="" selected disabled>Restaurants&amp;Menu</option>
                            <optgroup label="Thu's Tasty">
                                <option value="မာလာရှမ်းကောပွဲသေး">မာလာရှမ်းကောပွဲသေး(3500)</option>
                                <option value="မာလာရှမ်းကောပွဲကြီး">မာလာရှမ်းကောပွဲကြီး</option>
                            <optgroup label="ထမင်းသုပ်များ">
                                <option value="ချဉ်ပေါင်ကြော်ထမင်းသုပ်">ချဉ်ပေါင်ကြော်ထမင်းသုပ်(1000)</option>
                                <option value="မျှစ်ကြော်ထမင်းသုပ်">မျှစ်ကြော်ထမင်းသုပ်(1000)</option>
                                <option value="လက်ဖက်ထမင်းသုပ်">လက်ဖက်ထမင်းသုပ်(1000)</option>
                                <option value="ငပိထောင်းထမင်းသုပ်">ငပိထောင်းထမင်းသုပ်(1000)</option>
                                <option value="ငါးပိရည်ကျိုထမင်းသုပ်">ငါးပိရည်ကျိုထမင်းသုပ်(1000)</option>
                                <option value="ငံပြာရည်ကြော်ထမင်းသုပ်">ငံပြာရည်ကြော်ထမင်းသုပ်(1000)</option>
                                <option value="ကြက်အူချောင်းထမင်းသုပ်">ကြက်အူချောင်းထမင်းသုပ်(1000)</option>
                                <option value="ပဲပုတ်ထမင်းသုပ်">ပဲပုတ်ထမင်းသုပ်(1000)</option>
                            </optgroup>
                            <optgroup label="ဇလုံထမင်းသုပ်">
                                <option value="ကြက်သားဆီပြန်ဇလုံထမင်းသုပ်">ကြက်သားဆီပြန်ဇလုံထမင်းသုပ်(2000) </option>
                                <option value="ကြက်ရှူးရှဲဇလုံထမင်းသုပ်">ကြက်ရှူးရှဲဇလုံထမင်းသုပ်(2000)</option>
                                <option value="ဘဲဥချဉ်ဇလုံထမင်းသုပ်">ဘဲဥချဉ်ဇလုံထမင်းသုပ်(2000)</option>
                                <option value="ပုဇွန်ဆီပြန်ဇလုံထမင်းသုပ်">ပုဇွန်ဆီပြန်ဇလုံထမင်းသုပ်(2000)</option>
                            </optgroup>
                            <optgroup label="Snacks">
                                <option value="1000">ရေညှိထမင်းလိပ်</option>
                                <option value="2000">မာလာ CP</option>
                                <option value="1000">မာလာ hot dog</option>
                                <option value="2000">နံပြားချဉ်စပ်</option>
                                <option value="2000">ကိုရီးယားကြက်စပ်ကြေ</option>
                                <option value="2000">Fish Cake</option>
                                <option value="2500">2xSpicy with topping</option>
                                <option value="3500">ဖက်ထုပ်ကြော်</option>
                                <option value="1000">အာလူးချောင်းကြော်</option>
                            </optgroup>
                            </optgroup>
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="number" name="foods_price" class="form-control" id="price" readonly>
                    </div>   
                    <div class="form-group">
                        <label for="restaurants">Restaurants&amp;Menu</label>
                        <select name="drinks[]" class="form-control" id="soda" multiple>
                            <option value="" selected disabled>Restaurants&amp;Menu</option>
                            <optgroup label="Thu's Tasty">
                                <option value="1800">စတော်ဘယ်ရီသီးဖျော်ရည်</option>
                                <option value="1200">Orange Soda</option>
                                <option value="1200">Bubble Milk Tea</option>
                                <option value="1200">Brownsugar Bubble Milk Tea</option>
                                <option value="1200">Milk Green Tea</option>
                                <option value="1500">Rose Milk Tea</option>
                                <option value="1500">Boba Fresh Milk </option>
                                <option value="1200">Strawberry Soda </option>
                                <option value="1200">Blueberry Soda</option>
                                <option value="1200">Grape Soda</option>
                                <option value="1200">Kiwi Soda</option>
                                <option value="1800">ထောပတ်သီးဖျော်ရည်</option>
                                <option value="1200">နာနတ်သီးဖျော်ရည်</option>
                                <option value="1200">ဖရဲသီးဖျော်ရည် </option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="number" id="hello" name="drinks_price" class="form-control" readonly>
                    </div>


                    <!-- <div class="form-group">
                        <label for="Price">Total Price</label>
                        <input type="number" id="total" name="total" class="form-control" onclick="total_Price()" readonly>
                    </div>
-->
                        <div class="form-group">
                            <button class="btn btn-primary" name="submit">Submit</button>
                            <a class="btn btn-info" href="price.html">See Price</a>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>