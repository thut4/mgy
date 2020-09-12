<?php
require_once("connection.php");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare("SELECT * FROM customer_info WHERE cid=:cid");
$statement->bindParam(":cid", $_GET['cid']);
if ($statement->execute()) {
    $result = $statement->fetch(PDO::FETCH_OBJ);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <script src="another.js"></script>
    <style>
        body{
            background-color: gainsboro;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-9">
                <h3 class="text-primary">Update</h3>
                <?php if ($result) : ?>
                    <form action="update.php" method="POST">
                        <input type="text" class="form-control" name="cid" value="<?php echo $result->cid; ?>" hidden>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $result->name; ?>" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="phone" name="phone" class="form-control" value="<?php echo $result->phone; ?>" placeholder="Phone" pattern="^[0-9]*$">
                        </div>
                        <div class="form-group">
                            <label for="ward">Ward</label>
                            <!--<input list="ward-address" id="address" name="ward" class="form-control" placeholder="Choose Ward">-->
                            <select id="ward-address" name="ward" class="form-control form-control-sm">
                                <option selected disabled>--Select Ward--</option>
                                <option value="ဗိုလ်ချူပ်လမ်း" <?php if ($result->ward == "ဗိုလ်ချူပ်လမ်း") {
                                                                    echo "selected";
                                                                } ?>>ဗိုလ်ချူပ်လမ်း</option>

                                <option value="နတ်မောက်လမ်း" <?php if ($result->ward == "နတ်မောက်လမ်း") {
                                                                    echo "selected";
                                                                } ?>>နတ်မောက်လမ်း</option>

                                <option value="ခွာညိုလမ်း" <?php if ($result->ward == "ခွာညိုလမ်း") {
                                                                echo "selected";
                                                            } ?>>ခွာညိုလမ်း</option>


                                <option value="ပြည်တော်သာလမ်း" <?php if ($result->ward == "ပြည်တော်သာလမ်း") {
                                                                    echo "selected";
                                                                } ?>>ပြည်တော်သာလမ်း</option>

                                <option value="သစ္စာလမ်း" <?php if ($result->ward == "သစ္စာလမ်း") {
                                                                echo "selected";
                                                            } ?>>သစ္စာလမ်း</option>

                                <option value="မဲထီးလမ်း" <?php if ($result->ward == "မဲထီးလမ်း") {
                                                                echo "selected";
                                                            } ?>>မဲထီးလမ်း</option>


                                <option value="မေတ္တာလမ်း" <?php if ($result->ward == "မေတ္တာလမ်း") {
                                                                echo "selected";
                                                            } ?>>မေတ္တာလမ်း</option>

                                <option value="အထက၁လမ်း" <?php if ($result->ward == "အထက၁လမ်း") {
                                                                echo "selected";
                                                            } ?>>အထက၁လမ်း</option>

                                <option value="တောင်တွင်းလမ်း" <?php if ($result->ward == "တောင်တွင်းလမ်း") {
                                                                    echo "selected";
                                                                } ?>>တောင်တွင်းလမ်း</option>

                                <option value="အဝေရာလမ်း" <?php if ($result->ward == "အဝေရာလမ်း") {
                                                                echo "selected";
                                                            } ?>>အဝေရာလမ်း</option>

                                <option value="မြို့ပတ်လမ်း" <?php if ($result->ward == "မြို့ပတ်လမ်း") {
                                                                    echo "selected";
                                                                } ?>>မြို့ပတ်လမ်း</option>

                                <option value="ဈေးလယ်စိုး" <?php if ($result->ward == "ဈေးလယ်စိုး") {
                                                                echo "selected";
                                                            } ?>>ဈေးလယ်စိုး</option>
                                <option value="ဆားစည့်ရပ်" <?php if ($result->ward == "ဆားစည့်ရပ်") {
                                                                echo "selected";
                                                            } ?>>ဆားစည့်ရပ်</option>
                                <option value="ရွာသစ်ပွဲကြို" <?php if ($result->ward == "ရွာသစ်ပွဲကြို") {
                                                                    echo "selected";
                                                                } ?>>ရွာသစ်ပွဲကြို</option>
                                <option value="" <?php if ($result->ward == "ပြည်တော်သာ") {
                                                        echo "selected";
                                                    } ?>></option>
                                <option value="ကန်သာ A" <?php if ($result->ward == "ကန်သာ A") {
                                                            echo "selected";
                                                        } ?>>ကန်သာ A</option>
                                <option value="ကန်သာ B" <?php if ($result->ward == "ကန်သာ B") {
                                                            echo "selected";
                                                        } ?>>ကန်သာ B</option>
                                <option value="ကန်သာ C" <?php if ($result->ward == "ကန်သာ C") {
                                                            echo "selected";
                                                        } ?>>ကန်သာ C</option>
                                <option value="ကန်သာ D" <?php if ($result->ward == "ကန်သာ D") {
                                                            echo "selected";
                                                        } ?>>ကန်သာ D</option>
                                <option value="မြို့မအိုးဘို" <?php if ($result->ward == "မြို့မအိုးဘို") {
                                                                    echo "selected";
                                                                } ?>>မြို့မအိုးဘို</option>
                                <option value="ရွှေညောင်ရပ်" <?php if ($result->ward == "ရွှေညောင်ရပ်") {
                                                                    echo "selected";
                                                                } ?>>ရွှေညောင်ရပ်</option>
                                <option value="ကင်းရပ်" <?php if ($result->ward == "ကင်းရပ်") {
                                                            echo "selected";
                                                        } ?>>ကင်းရပ်</option>
                                <option value="စိုးကောမင်း" <?php if ($result->ward == "စိုးကောမင်း") {
                                                                echo "selected";
                                                            } ?>>စိုးကောမင်း</option>
                                <option value="ဆုံရပ်" <?php if ($result->ward == "ဆုံရပ်") {
                                                            echo "selected";
                                                        } ?>>ဆုံရပ်</option>
                                <option value="မြို့ဟောင်း" <?php if ($result->ward == "မြို့ဟောင်း") {
                                                                echo "selected";
                                                            } ?>>မြို့ဟောင်း</option>
                                <option value="သိင်္ဂါဂီရိ" <?php if ($result->ward == "သိင်္ဂါဂီရိ") {
                                                                echo "selected";
                                                            } ?>>သိင်္ဂါဂီရိ</option>
                                <option value="မြင်သာ" <?php if ($result->ward == "မြင်သာ") {
                                                            echo "selected";
                                                        } ?>>မြင်သာ</option>
                                <option value="အောင်စေတနာ A" <?php if ($result->ward == "အောင်စေတနာ A") {
                                                                    echo "selected";
                                                                } ?>>အောင်စေတနာ A</option>
                                <option value="အောင်စေတနာ B" <?php if ($result->ward == "အောင်စေတနာ B") {
                                                                    echo "selected";
                                                                } ?>>အောင်စေတနာ B</option>
                                <option value="အောင်စေတနာ C" <?php if ($result->ward == "အောင်စေတနာ C") {
                                                                    echo "selected";
                                                                } ?>>အောင်စေတနာ C</option>
                                <option value="အောင်စေတနာ D" <?php if ($result->ward == "အောင်စေတနာ D") {
                                                                    echo "selected";
                                                                } ?>>အောင်စေတနာ D</option>
                                <option value="ရန်မျိူးနိုင်" <?php if ($result->ward == "ရန်မျိူးနိုင်") {
                                                                    echo "selected";
                                                                } ?>>ရန်မျိူးနိုင်</option>
                                <option value="ရန်မျိူးလုံ" <?php if ($result->ward == "ရန်မျိူးလုံ") {
                                                                echo "selected";
                                                            } ?>>ရန်မျိူးလုံ</option>
                                <option value="ရန်မျိူးအောင်" <?php if ($result->ward == "ရန်မျိူးအောင်") {
                                                                    echo "selected";
                                                                } ?>>ရန်မျိူးအောင်</option>
                                <option value="ရန်ကင်း" <?php if ($result->ward == "ရန်ကင်း") {
                                                            echo "selected";
                                                        } ?>>ရန်ကင်း</option>
                                <option value="ရန်နိုင်" <?php if ($result->ward == "ရန်နိုင်") {
                                                                echo "selected";
                                                            } ?>>ရန်နိုင်</option>
                                <option value="ရန်ပယ်" <?php if ($result->ward == "ရန်ပယ်") {
                                                            echo "selected";
                                                        } ?>>ရန်ပယ်</option>
                                <option value="ရန်ကျော်" <?php if ($result->ward == "ရန်ကျော်") {
                                                                echo "selected";
                                                            } ?>>ရန်ကျော်</option>
                                <option value="ရန်အောင်" <?php if ($result->ward == "ရန်အောင်") {
                                                                echo "selected";
                                                            } ?>>ရန်အောင်</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Street</label>
                            <!--<input list="street-name" id="street" name="street" class="form-control" placeholder="Choose Street">-->
                            <select id="street-name" name="street" class="form-control form-control-sm">
                                <option selected disabled>--Select Street--</option>
                                <option value="၁လမ်း" <?php if ($result->street == "၁လမ်း") {
                                                            echo "selected";
                                                        } ?>>၁လမ်း</option>
                                <option value="၂လမ်း" <?php if ($result->street == "၂လမ်း") {
                                                            echo "selected";
                                                        } ?>>၂လမ်း</option>
                                <option value="၃လမ်း" <?php if ($result->street == "၃လမ်း") {
                                                            echo "selected";
                                                        } ?>>၃လမ်း</option>
                                <option value="၄လမ်း" <?php if ($result->street == "၄လမ်း") {
                                                            echo "selected";
                                                        } ?>>၄လမ်း</option>
                                <option value="၅လမ်း" <?php if ($result->street == "၅လမ်း") {
                                                            echo "selected";
                                                        } ?>>၅လမ်း</option>
                                <option value="၆လမ်း" <?php if ($result->street == "၆လမ်း") {
                                                            echo "selected";
                                                        } ?>>၆လမ်း</option>
                                <option value="၇လမ်း" <?php if ($result->street == "၇လမ်း") {
                                                            echo "selected";
                                                        } ?>>၇လမ်း</option>
                                <option value="၈လမ်း" <?php if ($result->street == "၈လမ်း") {
                                                            echo "selected";
                                                        } ?>>၈လမ်း</option>
                                <option value="၉လမ်း" <?php if ($result->street == "၉လမ်း") {
                                                            echo "selected";
                                                        } ?>>၉လမ်း</option>
                                <option value="၁၀လမ်း" <?php if ($result->street == "၁၀လမ်း") {
                                                            echo "selected";
                                                        } ?>>၁၀လမ်း</option>
                                <option value="၁၁လမ်း" <?php if ($result->street == "၁၁လမ်း") {
                                                            echo "selected";
                                                        } ?>>၁၁လမ်း</option>
                                <option value="၁၂လမ်း" <?php if ($result->street == "၁၂လမ်း") {
                                                            echo "selected";
                                                        } ?>>၁၂လမ်း</option>
                                <option value="၁၃လမ်း" <?php if ($result->street == "၁၃လမ်း") {
                                                            echo "selected";
                                                        } ?>>၁၃လမ်း</option>
                                <option value="၁၄လမ်း" <?php if ($result->street == "၁၄လမ်း") {
                                                            echo "selected";
                                                        } ?>>၁၄လမ်း</option>
                                <option value="၁၅လမ်း" <?php if ($result->street == "၁၅လမ်း") {
                                                            echo "selected";
                                                        } ?>>၁၅လမ်း</option>
                                <option value="၁၆လမ်း" <?php if ($result->street == "၁၆လမ်း") {
                                                            echo "selected";
                                                        } ?>>၁၆လမ်း</option>
                                <option value="၁၇လမ်း" <?php if ($result->street == "၁၇လမ်း") {
                                                            echo "selected";
                                                        } ?>>၁၇လမ်း</option>
                                <option value="၁၈လမ်း" <?php if ($result->street == "၁၈လမ်း") {
                                                            echo "selected";
                                                        } ?>>၁၈လမ်း</option>
                                <option value="၁၉လမ်း" <?php if ($result->street == "၁၉လမ်း") {
                                                            echo "selected";
                                                        } ?>>၁၉လမ်း</option>
                                <option value="၂၀လမ်း" <?php if ($result->street == "၂၀လမ်း") {
                                                            echo "selected";
                                                        } ?>>၂၀လမ်း</option>
                                <option value="၂၁လမ်း" <?php if ($result->street == "၂၁လမ်း") {
                                                            echo "selected";
                                                        } ?>>၂၁လမ်း</option>
                                <option value="၂၂လမ်း" <?php if ($result->street == "၂၂လမ်း") {
                                                            echo "selected";
                                                        } ?>>၂၂လမ်း</option>
                                <option value="၂၃လမ်း" <?php if ($result->street == "၂၃လမ်း") {
                                                            echo "selected";
                                                        } ?>>၂၃လမ်း</option>
                                <option value="၂၄လမ်း" <?php if ($result->street == "၂၄လမ်း") {
                                                            echo "selected";
                                                        } ?>>၂၄လမ်း</option>
                                <option value="၂၅လမ်း" <?php if ($result->street == "၂၅လမ်း") {
                                                            echo "selected";
                                                        } ?>>၂၅လမ်း</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Update</button>
                            <a href="name.php" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                <?php else : ?>
                    <p class="text-danger text-center">No Data Found</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>