const wplc_assets_guid = '6Xpmdcw4pceoLmaQ';
						const callusElements = document.getElementsByTagName("call-us");
						Array.prototype.forEach.call(callusElements, function (callus) {
							callus.setAttribute('assets-guid', wplc_assets_guid);
						});