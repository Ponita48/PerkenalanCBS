function allowDrop(ev) {
	ev.preventDefault();
}

function drag(ev) {
	ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev, el) {
	ev.preventDefault();
	var data = ev.dataTransfer.getData("text");
	el.appendChild(document.getElementById(data));
}

function drop1(ev, el) {
	var isi = document.getElementById('jawaban1').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_po_cbs').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_po_cbs').value = document.getElementById(data).src;
	}
}

function drop2(ev, el) {
	var isi = document.getElementById('jawaban2').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_sekretaris_cbs').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_sekretaris_cbs').value = document.getElementById(data).src;
	}
}

function drop3(ev, el) {
	var isi = document.getElementById('jawaban3').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_bendahara_cbs').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_bendahara_cbs').value = document.getElementById(data).src;
	}
}

function drop4(ev, el) {
	var isi = document.getElementById('jawaban4').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kabid1_cbs').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kabid1_cbs').value = document.getElementById(data).src;
	}
}

function drop5(ev, el) {
	var isi = document.getElementById('jawaban5').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadiv_humas').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadiv_humas').value = document.getElementById(data).src;
	}
}

function drop6(ev, el) {
	var isi = document.getElementById('jawaban6').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadiv_acara').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadiv_acara').value = document.getElementById(data).src;
	}
}

function drop7(ev, el) {
	var isi = document.getElementById('jawaban7').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadiv_pk').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadiv_pk').value = document.getElementById(data).src;
	}
}

function drop8(ev, el) {
	var isi = document.getElementById('jawaban8').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kabid2_cbs').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kabid2_cbs').value = document.getElementById(data).src;
	}
}

function drop9(ev, el) {
	var isi = document.getElementById('jawaban9').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadiv_medik').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadiv_medik').value = document.getElementById(data).src;
	}
}

function drop10(ev, el) {
	var isi = document.getElementById('jawaban10').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadiv_akademik').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadiv_akademik').value = document.getElementById(data).src;
	}
}

function drop11(ev, el) {
	var isi = document.getElementById('jawaban11').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadiv_komdis').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadiv_komdis').value = document.getElementById(data).src;
	}
}

function drop12(ev, el) {
	var isi = document.getElementById('jawaban12').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadiv_rohani').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadiv_rohani').value = document.getElementById(data).src;
	}
}

function drop13(ev, el) {
	var isi = document.getElementById('jawaban13').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kabid3_cbs').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kabid3_cbs').value = document.getElementById(data).src;
	}
}

function drop14(ev, el) {
	var isi = document.getElementById('jawaban14').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadiv_logistik').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadiv_logistik').value = document.getElementById(data).src;
	}
}

function drop15(ev, el) {
	var isi = document.getElementById('jawaban15').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadiv_dankom').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadiv_dankom').value = document.getElementById(data).src;
	}
}

function drop16(ev, el) {
	var isi = document.getElementById('jawaban16').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadiv_pubdok').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadiv_pubdok').value = document.getElementById(data).src;
	}
}

function drop17(ev, el) {
	var isi = document.getElementById('jawaban17').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_ketua_be').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_ketua_be').value = document.getElementById(data).src;
	}
}

function drop18(ev, el) {
	var isi = document.getElementById('jawaban18').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_waketu_be').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_waketu_be').value = document.getElementById(data).src;
	}
}

function drop19(ev, el) {
	var isi = document.getElementById('jawaban19').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kabir_adk').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kabir_adk').value = document.getElementById(data).src;
	}
}

function drop20(ev, el) {
	var isi = document.getElementById('jawaban20').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kabir_uang').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kabir_uang').value = document.getElementById(data).src;
	}
}

function drop21(ev, el) {
	var isi = document.getElementById('jawaban21').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadep_psdm').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadep_psdm').value = document.getElementById(data).src;
	}
}

function drop22(ev, el) {
	var isi = document.getElementById('jawaban22').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadep_po').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadep_po').value = document.getElementById(data).src;
	}
}

function drop23(ev, el) {
	var isi = document.getElementById('jawaban23').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadep_hubin').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadep_hubin').value = document.getElementById(data).src;
	}
}

function drop24(ev, el) {
	var isi = document.getElementById('jawaban24').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadep_hubeks').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadep_hubeks').value = document.getElementById(data).src;
	}
}

function drop25(ev, el) {
	var isi = document.getElementById('jawaban25').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadep_litbang').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadep_litbang').value = document.getElementById(data).src;
	}
}

function drop26(ev, el) {
	var isi = document.getElementById('jawaban26').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadep_medinfo').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadep_medinfo').value = document.getElementById(data).src;
	}
}

function drop27(ev, el) {
	var isi = document.getElementById('jawaban27').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadep_wirus').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadep_wirus').value = document.getElementById(data).src;
	}
}

function drop28(ev, el) {
	var isi = document.getElementById('jawaban28').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadep_agama').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadep_agama').value = document.getElementById(data).src;
	}
}

function drop29(ev, el) {
	var isi = document.getElementById('jawaban29').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadep_keprof').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadep_keprof').value = document.getElementById(data).src;
	}
}

function drop30(ev, el) {
	var isi = document.getElementById('jawaban30').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kadep_miba').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kadep_miba').value = document.getElementById(data).src;
	}
}

function drop31(ev, el) {
	var isi = document.getElementById('jawaban31').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_ketua_dpa').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_ketua_dpa').value = document.getElementById(data).src;
	}
}

function drop32(ev, el) {
	var isi = document.getElementById('jawaban32').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_sekretaris_dpa').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_sekretaris_dpa').value = document.getElementById(data).src;
	}
}

function drop33(ev, el) {
	var isi = document.getElementById('jawaban33').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_bendahara_dpa').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_bendahara_dpa').value = document.getElementById(data).src;
	}
}

function drop34(ev, el) {
	var isi = document.getElementById('jawaban34').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kakom_1').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kakom_1').value = document.getElementById(data).src;
	}
}

function drop35(ev, el) {
	var isi = document.getElementById('jawaban35').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kakom_2').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kakom_2').value = document.getElementById(data).src;
	}
}

function drop36(ev, el) {
	var isi = document.getElementById('jawaban36').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_kakom_3').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_kakom_3').value = document.getElementById(data).src;
	}
}

function drop37(ev, el) {
	var isi = document.getElementById('jawaban37').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_presidium_1').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_presidium_1').value = document.getElementById(data).src;
	}
}

function drop38(ev, el) {
	var isi = document.getElementById('jawaban38').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_presidium_2').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_presidium_2').value = document.getElementById(data).src;
	}
}

function drop39(ev, el) {
	var isi = document.getElementById('jawaban39').innerHTML;
	if (isi == ""){
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");

		el.appendChild(document.getElementById(data));

		document.getElementById('foto_presidium_3').value = document.getElementById(data).src;
	} else {
		// ev.preventDefault();
		// var data = ev.dataTransfer.getData("text");
	 //    var src = document.getElementById(data);
	 //    var srcParent = src.parentNode;
	 //    var tgt = ev.currentTarget.firstElementChild;

	 //    ev.currentTarget.replaceChild(src, tgt);
  //   	srcParent.appendChild(tgt);

  //   	document.getElementById('foto_presidium_3').value = document.getElementById(data).src;
	}
}