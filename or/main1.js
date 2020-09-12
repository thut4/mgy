function configureDropDownLists(rest, menu) {
  var CanteenEast = [
    "လက်ဖက်ထမင်း",
    "လက်ဖက်သုပ်",
    "ရှောက်သီးသုပ်",
    "ထမင်းသုပ်",
    "မုန့်ဟင်းခါးသုပ်",
    "ရောသုပ် ",
    "ထမင်းပုံစား (အသားတစ်မျိူး+အရံနှစ်မျိူး)",
    "ကြာဇံဟင်းခါး",
    "သင်္ဘောသီးထောင်း",
    "ခေါက်ဆွဲပြုတ်",
    "ဟော့ဒါ့ ",
    "ပသျှူးထမင်းကြော်",
    "ဆီချက်ခေါက်ဆွဲ ",
    "ရှမ်းခေါက်ဆွဲ",
    "ကြက်ဥဟက်",
    "ကြက်ဥမွှေကြော် "
  ];

  switch (rest.value) {
    case "CanteenEast":
      menu.options.length = 0;
      for (i = 0; i < CanteenEast.length; i++) {
        createOption(menu, CanteenEast[i], CanteenEast[i]);
      }
      break;
    default:
      menu.options.length = 0;
      break;
  }
}

function createOption(rest, text, value) {
  var opt = document.createElement("option");
  opt.value = value;
  opt.text = text;
  rest.options.add(opt);
}