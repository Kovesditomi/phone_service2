<div ng-app="myApp" ng-controller="myController">
    <select id="brandSelect" ng-model="selectedBrand" ng-options="brand.brand_id as brand.brand_name for brand in brands">
        <option value="">Válassz típust</option>
    </select>

    <select id="modelSelect" ng-model="selectedModel" ng-options="model.phonemodel_id as model.phonemodel_name for model in phoneModels" ng-disabled="!selectedBrand">
        <option value="">Válassz típust</option>
    </select>

    <select ng-model="selectedType" ng-options="type.type_id as type.type_name for type in types">
        <option value="">Válassz típust</option>
    </select>

    <select ng-model="selectedTypePart" ng-options="typePart.type_part_id as typePart.type_part_name for typePart in typeParts" ng-change="updateSelectedTypePartInfo()">
        <option value="">Válassz szervízt</option>
    </select>
    
    <!-- A kiválasztott típusrész információja -->
    <p>{{ Session::get('selectedTypePartInfo') }}</p>
    <p id="serviceFee"></p>

    <button ng-click="sendEmail()">Megrendelés elküldése</button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<script src="{{ asset('build/assets/phoneSelects.js') }}"></script>
