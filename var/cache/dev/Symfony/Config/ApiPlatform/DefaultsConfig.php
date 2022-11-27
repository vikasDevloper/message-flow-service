<?php

namespace Symfony\Config\ApiPlatform;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class DefaultsConfig 
{
    private $uriTemplate;
    private $shortName;
    private $description;
    private $types;
    private $operations;
    private $formats;
    private $inputFormats;
    private $outputFormats;
    private $uriVariables;
    private $routePrefix;
    private $defaults;
    private $requirements;
    private $options;
    private $stateless;
    private $sunset;
    private $acceptPatch;
    private $status;
    private $host;
    private $schemes;
    private $condition;
    private $controller;
    private $class;
    private $urlGenerationStrategy;
    private $deprecationReason;
    private $cacheHeaders;
    private $normalizationContext;
    private $denormalizationContext;
    private $hydraContext;
    private $openapiContext;
    private $validationContext;
    private $filters;
    private $elasticsearch;
    private $mercure;
    private $messenger;
    private $input;
    private $output;
    private $order;
    private $fetchPartial;
    private $forceEager;
    private $paginationClientEnabled;
    private $paginationClientItemsPerPage;
    private $paginationClientPartial;
    private $paginationViaCursor;
    private $paginationEnabled;
    private $paginationFetchJoinCollection;
    private $paginationUseOutputWalkers;
    private $paginationItemsPerPage;
    private $paginationMaximumItemsPerPage;
    private $paginationPartial;
    private $paginationType;
    private $security;
    private $securityMessage;
    private $securityPostDenormalize;
    private $securityPostDenormalizeMessage;
    private $securityPostValidation;
    private $securityPostValidationMessage;
    private $compositeIdentifier;
    private $exceptionToStatus;
    private $queryParameterValidationEnabled;
    private $graphQlOperations;
    private $provider;
    private $processor;
    private $extraProperties;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function uriTemplate($value): self
    {
        $this->uriTemplate = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function shortName($value): self
    {
        $this->shortName = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function description($value): self
    {
        $this->description = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function types($value): self
    {
        $this->types = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function operations($value): self
    {
        $this->operations = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function formats($value): self
    {
        $this->formats = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function inputFormats($value): self
    {
        $this->inputFormats = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function outputFormats($value): self
    {
        $this->outputFormats = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function uriVariables($value): self
    {
        $this->uriVariables = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function routePrefix($value): self
    {
        $this->routePrefix = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaults($value): self
    {
        $this->defaults = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function requirements($value): self
    {
        $this->requirements = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function options($value): self
    {
        $this->options = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function stateless($value): self
    {
        $this->stateless = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sunset($value): self
    {
        $this->sunset = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function acceptPatch($value): self
    {
        $this->acceptPatch = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function status($value): self
    {
        $this->status = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): self
    {
        $this->host = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function schemes($value): self
    {
        $this->schemes = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function condition($value): self
    {
        $this->condition = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function controller($value): self
    {
        $this->controller = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function class($value): self
    {
        $this->class = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function urlGenerationStrategy($value): self
    {
        $this->urlGenerationStrategy = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function deprecationReason($value): self
    {
        $this->deprecationReason = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cacheHeaders($value): self
    {
        $this->cacheHeaders = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function normalizationContext($value): self
    {
        $this->normalizationContext = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function denormalizationContext($value): self
    {
        $this->denormalizationContext = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hydraContext($value): self
    {
        $this->hydraContext = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function openapiContext($value): self
    {
        $this->openapiContext = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function validationContext($value): self
    {
        $this->validationContext = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filters($value): self
    {
        $this->filters = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function elasticsearch($value): self
    {
        $this->elasticsearch = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mercure($value): self
    {
        $this->mercure = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function messenger($value): self
    {
        $this->messenger = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function input($value): self
    {
        $this->input = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function output($value): self
    {
        $this->output = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function order($value): self
    {
        $this->order = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fetchPartial($value): self
    {
        $this->fetchPartial = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function forceEager($value): self
    {
        $this->forceEager = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationClientEnabled($value): self
    {
        $this->paginationClientEnabled = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationClientItemsPerPage($value): self
    {
        $this->paginationClientItemsPerPage = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationClientPartial($value): self
    {
        $this->paginationClientPartial = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationViaCursor($value): self
    {
        $this->paginationViaCursor = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationEnabled($value): self
    {
        $this->paginationEnabled = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationFetchJoinCollection($value): self
    {
        $this->paginationFetchJoinCollection = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationUseOutputWalkers($value): self
    {
        $this->paginationUseOutputWalkers = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationItemsPerPage($value): self
    {
        $this->paginationItemsPerPage = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationMaximumItemsPerPage($value): self
    {
        $this->paginationMaximumItemsPerPage = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationPartial($value): self
    {
        $this->paginationPartial = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationType($value): self
    {
        $this->paginationType = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function security($value): self
    {
        $this->security = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function securityMessage($value): self
    {
        $this->securityMessage = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function securityPostDenormalize($value): self
    {
        $this->securityPostDenormalize = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function securityPostDenormalizeMessage($value): self
    {
        $this->securityPostDenormalizeMessage = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function securityPostValidation($value): self
    {
        $this->securityPostValidation = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function securityPostValidationMessage($value): self
    {
        $this->securityPostValidationMessage = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function compositeIdentifier($value): self
    {
        $this->compositeIdentifier = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function exceptionToStatus($value): self
    {
        $this->exceptionToStatus = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function queryParameterValidationEnabled($value): self
    {
        $this->queryParameterValidationEnabled = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function graphQlOperations($value): self
    {
        $this->graphQlOperations = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function provider($value): self
    {
        $this->provider = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function processor($value): self
    {
        $this->processor = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function extraProperties($value): self
    {
        $this->extraProperties = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['uri_template'])) {
            $this->uriTemplate = $value['uri_template'];
            unset($value['uri_template']);
        }
    
        if (isset($value['short_name'])) {
            $this->shortName = $value['short_name'];
            unset($value['short_name']);
        }
    
        if (isset($value['description'])) {
            $this->description = $value['description'];
            unset($value['description']);
        }
    
        if (isset($value['types'])) {
            $this->types = $value['types'];
            unset($value['types']);
        }
    
        if (isset($value['operations'])) {
            $this->operations = $value['operations'];
            unset($value['operations']);
        }
    
        if (isset($value['formats'])) {
            $this->formats = $value['formats'];
            unset($value['formats']);
        }
    
        if (isset($value['input_formats'])) {
            $this->inputFormats = $value['input_formats'];
            unset($value['input_formats']);
        }
    
        if (isset($value['output_formats'])) {
            $this->outputFormats = $value['output_formats'];
            unset($value['output_formats']);
        }
    
        if (isset($value['uri_variables'])) {
            $this->uriVariables = $value['uri_variables'];
            unset($value['uri_variables']);
        }
    
        if (isset($value['route_prefix'])) {
            $this->routePrefix = $value['route_prefix'];
            unset($value['route_prefix']);
        }
    
        if (isset($value['defaults'])) {
            $this->defaults = $value['defaults'];
            unset($value['defaults']);
        }
    
        if (isset($value['requirements'])) {
            $this->requirements = $value['requirements'];
            unset($value['requirements']);
        }
    
        if (isset($value['options'])) {
            $this->options = $value['options'];
            unset($value['options']);
        }
    
        if (isset($value['stateless'])) {
            $this->stateless = $value['stateless'];
            unset($value['stateless']);
        }
    
        if (isset($value['sunset'])) {
            $this->sunset = $value['sunset'];
            unset($value['sunset']);
        }
    
        if (isset($value['accept_patch'])) {
            $this->acceptPatch = $value['accept_patch'];
            unset($value['accept_patch']);
        }
    
        if (isset($value['status'])) {
            $this->status = $value['status'];
            unset($value['status']);
        }
    
        if (isset($value['host'])) {
            $this->host = $value['host'];
            unset($value['host']);
        }
    
        if (isset($value['schemes'])) {
            $this->schemes = $value['schemes'];
            unset($value['schemes']);
        }
    
        if (isset($value['condition'])) {
            $this->condition = $value['condition'];
            unset($value['condition']);
        }
    
        if (isset($value['controller'])) {
            $this->controller = $value['controller'];
            unset($value['controller']);
        }
    
        if (isset($value['class'])) {
            $this->class = $value['class'];
            unset($value['class']);
        }
    
        if (isset($value['url_generation_strategy'])) {
            $this->urlGenerationStrategy = $value['url_generation_strategy'];
            unset($value['url_generation_strategy']);
        }
    
        if (isset($value['deprecation_reason'])) {
            $this->deprecationReason = $value['deprecation_reason'];
            unset($value['deprecation_reason']);
        }
    
        if (isset($value['cache_headers'])) {
            $this->cacheHeaders = $value['cache_headers'];
            unset($value['cache_headers']);
        }
    
        if (isset($value['normalization_context'])) {
            $this->normalizationContext = $value['normalization_context'];
            unset($value['normalization_context']);
        }
    
        if (isset($value['denormalization_context'])) {
            $this->denormalizationContext = $value['denormalization_context'];
            unset($value['denormalization_context']);
        }
    
        if (isset($value['hydra_context'])) {
            $this->hydraContext = $value['hydra_context'];
            unset($value['hydra_context']);
        }
    
        if (isset($value['openapi_context'])) {
            $this->openapiContext = $value['openapi_context'];
            unset($value['openapi_context']);
        }
    
        if (isset($value['validation_context'])) {
            $this->validationContext = $value['validation_context'];
            unset($value['validation_context']);
        }
    
        if (isset($value['filters'])) {
            $this->filters = $value['filters'];
            unset($value['filters']);
        }
    
        if (isset($value['elasticsearch'])) {
            $this->elasticsearch = $value['elasticsearch'];
            unset($value['elasticsearch']);
        }
    
        if (isset($value['mercure'])) {
            $this->mercure = $value['mercure'];
            unset($value['mercure']);
        }
    
        if (isset($value['messenger'])) {
            $this->messenger = $value['messenger'];
            unset($value['messenger']);
        }
    
        if (isset($value['input'])) {
            $this->input = $value['input'];
            unset($value['input']);
        }
    
        if (isset($value['output'])) {
            $this->output = $value['output'];
            unset($value['output']);
        }
    
        if (isset($value['order'])) {
            $this->order = $value['order'];
            unset($value['order']);
        }
    
        if (isset($value['fetch_partial'])) {
            $this->fetchPartial = $value['fetch_partial'];
            unset($value['fetch_partial']);
        }
    
        if (isset($value['force_eager'])) {
            $this->forceEager = $value['force_eager'];
            unset($value['force_eager']);
        }
    
        if (isset($value['pagination_client_enabled'])) {
            $this->paginationClientEnabled = $value['pagination_client_enabled'];
            unset($value['pagination_client_enabled']);
        }
    
        if (isset($value['pagination_client_items_per_page'])) {
            $this->paginationClientItemsPerPage = $value['pagination_client_items_per_page'];
            unset($value['pagination_client_items_per_page']);
        }
    
        if (isset($value['pagination_client_partial'])) {
            $this->paginationClientPartial = $value['pagination_client_partial'];
            unset($value['pagination_client_partial']);
        }
    
        if (isset($value['pagination_via_cursor'])) {
            $this->paginationViaCursor = $value['pagination_via_cursor'];
            unset($value['pagination_via_cursor']);
        }
    
        if (isset($value['pagination_enabled'])) {
            $this->paginationEnabled = $value['pagination_enabled'];
            unset($value['pagination_enabled']);
        }
    
        if (isset($value['pagination_fetch_join_collection'])) {
            $this->paginationFetchJoinCollection = $value['pagination_fetch_join_collection'];
            unset($value['pagination_fetch_join_collection']);
        }
    
        if (isset($value['pagination_use_output_walkers'])) {
            $this->paginationUseOutputWalkers = $value['pagination_use_output_walkers'];
            unset($value['pagination_use_output_walkers']);
        }
    
        if (isset($value['pagination_items_per_page'])) {
            $this->paginationItemsPerPage = $value['pagination_items_per_page'];
            unset($value['pagination_items_per_page']);
        }
    
        if (isset($value['pagination_maximum_items_per_page'])) {
            $this->paginationMaximumItemsPerPage = $value['pagination_maximum_items_per_page'];
            unset($value['pagination_maximum_items_per_page']);
        }
    
        if (isset($value['pagination_partial'])) {
            $this->paginationPartial = $value['pagination_partial'];
            unset($value['pagination_partial']);
        }
    
        if (isset($value['pagination_type'])) {
            $this->paginationType = $value['pagination_type'];
            unset($value['pagination_type']);
        }
    
        if (isset($value['security'])) {
            $this->security = $value['security'];
            unset($value['security']);
        }
    
        if (isset($value['security_message'])) {
            $this->securityMessage = $value['security_message'];
            unset($value['security_message']);
        }
    
        if (isset($value['security_post_denormalize'])) {
            $this->securityPostDenormalize = $value['security_post_denormalize'];
            unset($value['security_post_denormalize']);
        }
    
        if (isset($value['security_post_denormalize_message'])) {
            $this->securityPostDenormalizeMessage = $value['security_post_denormalize_message'];
            unset($value['security_post_denormalize_message']);
        }
    
        if (isset($value['security_post_validation'])) {
            $this->securityPostValidation = $value['security_post_validation'];
            unset($value['security_post_validation']);
        }
    
        if (isset($value['security_post_validation_message'])) {
            $this->securityPostValidationMessage = $value['security_post_validation_message'];
            unset($value['security_post_validation_message']);
        }
    
        if (isset($value['composite_identifier'])) {
            $this->compositeIdentifier = $value['composite_identifier'];
            unset($value['composite_identifier']);
        }
    
        if (isset($value['exception_to_status'])) {
            $this->exceptionToStatus = $value['exception_to_status'];
            unset($value['exception_to_status']);
        }
    
        if (isset($value['query_parameter_validation_enabled'])) {
            $this->queryParameterValidationEnabled = $value['query_parameter_validation_enabled'];
            unset($value['query_parameter_validation_enabled']);
        }
    
        if (isset($value['graph_ql_operations'])) {
            $this->graphQlOperations = $value['graph_ql_operations'];
            unset($value['graph_ql_operations']);
        }
    
        if (isset($value['provider'])) {
            $this->provider = $value['provider'];
            unset($value['provider']);
        }
    
        if (isset($value['processor'])) {
            $this->processor = $value['processor'];
            unset($value['processor']);
        }
    
        if (isset($value['extra_properties'])) {
            $this->extraProperties = $value['extra_properties'];
            unset($value['extra_properties']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->uriTemplate) {
            $output['uri_template'] = $this->uriTemplate;
        }
        if (null !== $this->shortName) {
            $output['short_name'] = $this->shortName;
        }
        if (null !== $this->description) {
            $output['description'] = $this->description;
        }
        if (null !== $this->types) {
            $output['types'] = $this->types;
        }
        if (null !== $this->operations) {
            $output['operations'] = $this->operations;
        }
        if (null !== $this->formats) {
            $output['formats'] = $this->formats;
        }
        if (null !== $this->inputFormats) {
            $output['input_formats'] = $this->inputFormats;
        }
        if (null !== $this->outputFormats) {
            $output['output_formats'] = $this->outputFormats;
        }
        if (null !== $this->uriVariables) {
            $output['uri_variables'] = $this->uriVariables;
        }
        if (null !== $this->routePrefix) {
            $output['route_prefix'] = $this->routePrefix;
        }
        if (null !== $this->defaults) {
            $output['defaults'] = $this->defaults;
        }
        if (null !== $this->requirements) {
            $output['requirements'] = $this->requirements;
        }
        if (null !== $this->options) {
            $output['options'] = $this->options;
        }
        if (null !== $this->stateless) {
            $output['stateless'] = $this->stateless;
        }
        if (null !== $this->sunset) {
            $output['sunset'] = $this->sunset;
        }
        if (null !== $this->acceptPatch) {
            $output['accept_patch'] = $this->acceptPatch;
        }
        if (null !== $this->status) {
            $output['status'] = $this->status;
        }
        if (null !== $this->host) {
            $output['host'] = $this->host;
        }
        if (null !== $this->schemes) {
            $output['schemes'] = $this->schemes;
        }
        if (null !== $this->condition) {
            $output['condition'] = $this->condition;
        }
        if (null !== $this->controller) {
            $output['controller'] = $this->controller;
        }
        if (null !== $this->class) {
            $output['class'] = $this->class;
        }
        if (null !== $this->urlGenerationStrategy) {
            $output['url_generation_strategy'] = $this->urlGenerationStrategy;
        }
        if (null !== $this->deprecationReason) {
            $output['deprecation_reason'] = $this->deprecationReason;
        }
        if (null !== $this->cacheHeaders) {
            $output['cache_headers'] = $this->cacheHeaders;
        }
        if (null !== $this->normalizationContext) {
            $output['normalization_context'] = $this->normalizationContext;
        }
        if (null !== $this->denormalizationContext) {
            $output['denormalization_context'] = $this->denormalizationContext;
        }
        if (null !== $this->hydraContext) {
            $output['hydra_context'] = $this->hydraContext;
        }
        if (null !== $this->openapiContext) {
            $output['openapi_context'] = $this->openapiContext;
        }
        if (null !== $this->validationContext) {
            $output['validation_context'] = $this->validationContext;
        }
        if (null !== $this->filters) {
            $output['filters'] = $this->filters;
        }
        if (null !== $this->elasticsearch) {
            $output['elasticsearch'] = $this->elasticsearch;
        }
        if (null !== $this->mercure) {
            $output['mercure'] = $this->mercure;
        }
        if (null !== $this->messenger) {
            $output['messenger'] = $this->messenger;
        }
        if (null !== $this->input) {
            $output['input'] = $this->input;
        }
        if (null !== $this->output) {
            $output['output'] = $this->output;
        }
        if (null !== $this->order) {
            $output['order'] = $this->order;
        }
        if (null !== $this->fetchPartial) {
            $output['fetch_partial'] = $this->fetchPartial;
        }
        if (null !== $this->forceEager) {
            $output['force_eager'] = $this->forceEager;
        }
        if (null !== $this->paginationClientEnabled) {
            $output['pagination_client_enabled'] = $this->paginationClientEnabled;
        }
        if (null !== $this->paginationClientItemsPerPage) {
            $output['pagination_client_items_per_page'] = $this->paginationClientItemsPerPage;
        }
        if (null !== $this->paginationClientPartial) {
            $output['pagination_client_partial'] = $this->paginationClientPartial;
        }
        if (null !== $this->paginationViaCursor) {
            $output['pagination_via_cursor'] = $this->paginationViaCursor;
        }
        if (null !== $this->paginationEnabled) {
            $output['pagination_enabled'] = $this->paginationEnabled;
        }
        if (null !== $this->paginationFetchJoinCollection) {
            $output['pagination_fetch_join_collection'] = $this->paginationFetchJoinCollection;
        }
        if (null !== $this->paginationUseOutputWalkers) {
            $output['pagination_use_output_walkers'] = $this->paginationUseOutputWalkers;
        }
        if (null !== $this->paginationItemsPerPage) {
            $output['pagination_items_per_page'] = $this->paginationItemsPerPage;
        }
        if (null !== $this->paginationMaximumItemsPerPage) {
            $output['pagination_maximum_items_per_page'] = $this->paginationMaximumItemsPerPage;
        }
        if (null !== $this->paginationPartial) {
            $output['pagination_partial'] = $this->paginationPartial;
        }
        if (null !== $this->paginationType) {
            $output['pagination_type'] = $this->paginationType;
        }
        if (null !== $this->security) {
            $output['security'] = $this->security;
        }
        if (null !== $this->securityMessage) {
            $output['security_message'] = $this->securityMessage;
        }
        if (null !== $this->securityPostDenormalize) {
            $output['security_post_denormalize'] = $this->securityPostDenormalize;
        }
        if (null !== $this->securityPostDenormalizeMessage) {
            $output['security_post_denormalize_message'] = $this->securityPostDenormalizeMessage;
        }
        if (null !== $this->securityPostValidation) {
            $output['security_post_validation'] = $this->securityPostValidation;
        }
        if (null !== $this->securityPostValidationMessage) {
            $output['security_post_validation_message'] = $this->securityPostValidationMessage;
        }
        if (null !== $this->compositeIdentifier) {
            $output['composite_identifier'] = $this->compositeIdentifier;
        }
        if (null !== $this->exceptionToStatus) {
            $output['exception_to_status'] = $this->exceptionToStatus;
        }
        if (null !== $this->queryParameterValidationEnabled) {
            $output['query_parameter_validation_enabled'] = $this->queryParameterValidationEnabled;
        }
        if (null !== $this->graphQlOperations) {
            $output['graph_ql_operations'] = $this->graphQlOperations;
        }
        if (null !== $this->provider) {
            $output['provider'] = $this->provider;
        }
        if (null !== $this->processor) {
            $output['processor'] = $this->processor;
        }
        if (null !== $this->extraProperties) {
            $output['extra_properties'] = $this->extraProperties;
        }
    
        return $output;
    }
    

}
